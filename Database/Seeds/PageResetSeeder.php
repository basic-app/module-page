<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace BasicApp\Page\Database\Seeds;

class PageResetSeeder extends \BasicApp\Core\Seeder
{

    public function run()
    {
        $this->db->table('pages')->truncate();
    }

}