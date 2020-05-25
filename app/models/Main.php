<?

namespace app\models;

use app\core\Model;
use app\lib\Db;

class Main extends Model {

    public function getImages() {

        $db = new Db;
        $query = $db -> row("SELECT * FROM gallery");

        return $query;
    }
}