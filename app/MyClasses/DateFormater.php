<?php 
namespace App\MyClasses;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DateFormater {
    public function __construct() {
        return "construct function was initialized.";
    }
    // format date: "2021-01-15T18:35:09.000000Z"
    public function formater($date_string,$date_type)
    {
        $monthsArray= [
            "January"=>[
                "n_m_fr"=>"Jan",
                "n_m_en"=>"Jan",
                "n_l_fr"=>"Janvier",
                "n_l_en"=>"January",

            ],
            "February"=>[
                "n_m_fr"=>"Fév",
                "n_m_en"=>"Feb",
                "n_l_fr"=>"Février",
                "n_l_en"=>"February",
            ],
            "March"=>[
                "n_m_fr"=>"Mar",
                "n_m_en"=>"Mar",
                "n_l_fr"=>"Mardi",
                "n_l_en"=>"March",
            ],
            "April"=>[
                "n_m_fr"=>"Avr",
                "n_m_en"=>"Apr",
                "n_l_fr"=>"Avril",
                "n_l_en"=>"April",
            ],
            "May"=>[
                "n_m_fr"=>"Mai",
                "n_m_en"=>"May",
                "n_l_fr"=>"Mai",
                "n_l_en"=>"May",
            ],
            "June"=>[
                "n_m_fr"=>"Jun",
                "n_m_en"=>"Jun",
                "n_l_fr"=>"Juin",
                "n_l_en"=>"June",
            ],
            "July"=>[
                "n_m_fr"=>"Jul",
                "n_m_en"=>"Jul",
                "n_l_fr"=>"Juillet",
                "n_l_en"=>"July",
            ],

            "August"=>[
                "n_m_fr"=>"Aug",
                "n_m_en"=>"Aug",
                "n_l_fr"=>"Aout",
                "n_l_en"=>"Auguster",
            ],

            "September"=>[
                "n_m_fr"=>"Sep",
                "n_m_en"=>"Sep",
                "n_l_fr"=>"Septembre",
                "n_l_en"=>"September",
            ],

            "October"=>[
                "n_m_fr"=>"Oct",
                "n_m_en"=>"Oct",
                "n_l_fr"=>"Octobre",
                "n_l_en"=>"October",
            ],

            "November"=>[
                "n_m_fr"=>"Nov",
                "n_m_en"=>"Nov",
                "n_l_fr"=>"Novembre",
                "n_l_en"=>"November",
            ],
            "December"=>[
                "n_m_fr"=>"Déc",
                "n_m_en"=>"Dec",
                "n_l_fr"=>"Décembre",
                "n_l_en"=>"December",
            ]
        ];

        $myDate = $date_string->format('Y-m-d');
        $day = Carbon::parse($myDate)->format('l');
        $month = Carbon::parse($myDate)->format('F');
        $day_num=substr($myDate,8,2) ;//2020-09-24
        $month_num=substr($myDate,5,2) ;//2020-09-24
        $year_num=substr($myDate,0,4) ;//2020-09-24
        if ($date_type=="long") {
            $month_name_min = $monthsArray[$month]["n_l_en"];
            if(app()->getLocale()=="fr"){
                $month_name_min = $monthsArray[$month]["n_l_fr"];
            }
            return $day_num.' '.$month_name_min.' '.$year_num;
        }elseif ($date_type=="min"){
            $month_name_min = $monthsArray[$month]["n_m_en"];
            if(app()->getLocale()=="fr"){
                $month_name_min = $monthsArray[$month]["n_m_fr"];
            }
            return $day_num.' '.$month_name_min.' '.$year_num;
        }
        
    }
}