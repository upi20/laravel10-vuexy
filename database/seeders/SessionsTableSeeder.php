<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sessions')->delete();
        
        \DB::table('sessions')->insert(array (
            0 => 
            array (
                'id' => 'A8UA5RQCJSmdviEysj3ZKTJDmdTMe62lAlatUv5e',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
                'payload' => 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiREpTN1p4N0lWVFNkZ3E5c1Y0eXlaa2pDRHdpblVRbmhkeUV6WVl4MCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbGFyYXZlbDEwLnRlc3QvdXNlci9wcm9maWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR4OFBpRG9yQTNPZDlZSUZua1hHZEdlWW5EbmtTRTFSODVzYldlaFJINXlpUTRYRkhvanJhcSI7fQ==',
                'last_activity' => 1677386039,
            ),
            1 => 
            array (
                'id' => 'eoBOiywEUBPywOtqmMdeCoJFDKSXuCFRXSjQEkot',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
                'payload' => 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYzVZNlYwZTRaaWF0d3J0TmdhTTc4UnR1cHlKeW1DeWtTRjBlSDZvdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sYXJhdmVsMTAudGVzdC9kYXNoYm9hcmQvYW5hbHl0aWNzIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkeDhQaURvckEzT2Q5WUlGbmtYR2RHZVluRG5rU0UxUjg1c2JXZWhSSDV5aVE0WEZIb2pyYXEiO30=',
                'last_activity' => 1677402885,
            ),
            2 => 
            array (
                'id' => 'n6avApKPr73h5fV4Uvn0mkIcGXRlyBmtdfwZ1urO',
                'user_id' => 1,
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
                'payload' => 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGxJbTdZNXhiZWxoR2hFYW1nWWVyd1AwaXVic25aQmlEeERTdm96OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHg4UGlEb3JBM09kOVlJRm5rWEdkR2VZbkRua1NFMVI4NXNiV2VoUkg1eWlRNFhGSG9qcmFxIjt9',
                'last_activity' => 1677386819,
            ),
        ));
        
        
    }
}