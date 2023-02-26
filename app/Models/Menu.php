<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'sequence',
        'parent_id',
        'badge',
        'badgeClass',
        'url',
        'name',
        'icon',
        'slug',
        'navheader',
        'newTab',
    ];

    protected $primaryKey = 'id';
    protected $table = 'menus';
    const tableName = 'menus';

    public function submenus()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function subMenuCustom()
    {
        return $this->submenus()->orderBy('sequence');
    }

    public static function menuRender()
    {
        $menus = self::with('subMenuCustom.subMenuCustom')->whereNull('parent_id')->get();
        $results = [];
        foreach ($menus as $menu) {
            $parent = [];
            foreach ($menu->getFillable() as $key) {
                if ($menu->$key !== null) $parent[$key] = $menu->$key;
            }

            // submenu
            $subMenuResults = [];
            foreach ($menu->subMenuCustom ?? [] as $subMenu) {

                // declaration variable submenu
                $subMenuItem = [];
                foreach ($subMenu->getFillable() as $key) {
                    if ($subMenu->$key !== null) $subMenuItem[$key] = $subMenu->$key;
                }


                // insert sub menu
                $subSubMenuResults = [];
                foreach ($subMenu->subMenuCustom ?? [] as $subSubMenu) {
                    // declaration variable submenu
                    $subSubMenuItem = [];
                    foreach ($subSubMenu->getFillable() as $key) {
                        if ($subSubMenu->$key !== null) $subSubMenuItem[$key] = $subSubMenu->$key;
                    }
                    $subSubMenuResults[] = (object)$subSubMenuItem;
                }

                if (count($subSubMenuResults)) $subMenuItem['submenu'] = $subSubMenuResults;
                $subMenuResults[] = (object)$subMenuItem;
            }

            if (count($subMenuResults)) $parent['submenu'] = (object)$subMenuResults;
            $results[] = (object)$parent;
        }
        return $results;
    }
}
