<?php
 $biodata = [
     "name" => "Risky Amalia Haris",
     "age" => 23,
     "hobbies" => ["Reading", "Writing"],
     "IsMarried" => false,
     "schoolList" => [
         "elementarySchool" => [
             "yearIn" => 2003,
             "yearOut" => 2009,
             "major" => null
         ],
         "JuniorHighSchool" => [
            "yearIn" => 2009,
            "yearOut" => 2012,
            "major" => null
        ],
        "SeniorHighSchool" => [
            "yearIn" => 2012,
            "yearOut" => 2015,
            "major" => "Science"
        ],
        "University" => [
            "yearIn" => 2015,
            "yearOut" => 2019,
            "major" => "Computer Engineering"
        ]
        ],
        "skills" => [
            "JavaScript" => "Advanced",
            "Express" => "Advanced",
            "Vue" => "Advanced",
            "React" => "Beginner",
            "C++" => "Beginner",
            "PHP" => "Beginner"
        ],
        "interestInCoding" => true
    ];
    echo "</br >";
    print_r($biodata);

?>