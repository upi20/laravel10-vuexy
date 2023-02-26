<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class LabController extends Controller
{
    public function index()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('content.lab.datatable', ['pageConfigs' => $pageConfigs]);
        return view('auth.login');
    }

    public function menuSeed()
    {
        $verticalMenuJson = file_get_contents(storage_path('app/menu-data/verticalMenu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);

        DB::table(Menu::tableName)->truncate();

        DB::beginTransaction();
        // delete all menu

        foreach ($verticalMenuData->menu as $i => $menu) {
            // insert menu
            $save = $this->menuSeedInsert(menu: $menu, sequence: ($i + 1));

            // insert submenu
            $subMenus = isset($menu->submenu) ? $menu->submenu : [];
            foreach ($subMenus as $j => $subMenu) {
                $saveSubMenu = $this->menuSeedInsert(menu: $subMenu, parent_id: $save->id, sequence: ($j + 1));
                $subMenus = isset($menu->submenu) ? $menu->submenu : [];

                // insert sub sub menu
                $subSubMenus = isset($subMenu->submenu) ? $subMenu->submenu : [];
                foreach ($subSubMenus as $k => $subSubMenu) {
                    $this->menuSeedInsert(menu: $subSubMenu, parent_id: $saveSubMenu->id, sequence: ($k + 1));
                }
            }
        }

        DB::commit();
        $menus = Menu::all();
        return $menus;
    }

    private function menuSeedInsert($menu, $parent_id = null, $sequence = 0): Menu
    {
        $newMenu = new Menu();
        $newMenu->parent_id = $parent_id;

        $newMenu->sequence = $sequence;
        $newMenu->badge = isset($menu->badge) ? $menu->badge : null;
        $newMenu->badgeClass = isset($menu->badgeClass) ? $menu->badgeClass : null;
        $newMenu->url = isset($menu->url) ? $menu->url : null;
        $newMenu->name = isset($menu->name) ? $menu->name : null;
        $newMenu->icon = isset($menu->icon) ? $menu->icon : null;
        $newMenu->slug = isset($menu->slug) ? $menu->slug : null;
        $newMenu->navheader = isset($menu->navheader) ? $menu->navheader : null;
        $newMenu->newTab = isset($menu->newTab) ? $menu->newTab : null;

        $newMenu->save();
        return $newMenu;
    }

    public function menuRender()
    {
        $menus = Menu::menuRender();
        // return "oke";
        return $menus;
    }
}
