<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GetUserController extends Controller
{
    public function getUser(Request $request)
    {
        $today = date("d-m-Y");

        $arr = 
        [
            (object)[
                "name" => "Anna",
                "surname" => "Nowak",
                "address" => "ul Lipowa 26, Poznań 61-005",
                "birthDate" => "01-05-2000",
                "promo" => 0
            ],
            (object)[
                "name" => "Piotr",
                "surname" => "Kozioł",
                "address" => "ul Kasztanowa 10, Karków 40-005",
                "birthDate" => "07-01-1998",
                "promo" => 0
            ],
            (object)[
                "name" => "Adam",
                "surname" => "Zając",
                "address" => "ul Brzozowa 1, Warszawa 20-005",
                "birthDate" => "11-09-2005",
                "promo" => 0
            ],
            (object)[
                "name" => "Wojciech",
                "surname" => "Szychowiak",
                "address" => "ul Htubieszowska 9, Szczecin 72-005",
                "birthDate" => "25-03-1997",
                "promo" => 0
            ],
            (object)[
                "name" => "Patrycja",
                "surname" => "Konieczna",
                "address" => "ul Szwajcarska 25, Poznań 61-005",
                "birthDate" => "12-12-1996",
                "promo" => 0
            ],
            (object)[
                "name" => "Martyna",
                "surname" => "Wierch",
                "address" => "ul Poznańska 96, Koscian 64-111",
                "birthDate" => "08-02-1992",
                "promo" => 0
            ],
        ];
        
        foreach ($arr as $key=>$value) {
            
            $diff = date_diff(date_create($value->birthDate), date_create($today));
            if(18 <= $diff->format('%y') && $diff->format('%y') <= 26){
                $value->promo = 1;
            }
            
        }

        return json_encode($arr);

    }
}
