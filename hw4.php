<?php
    $data = [
        "id" => 1,
        "name" => "Leanne Graham",
        "username" => "Bret",
        "email" => "Sincere@april.biz",
        "address" => [
            "street" => "Kulas Light",
            "suite" => "Apt. 556",
            "city" => "Gwenborough",
            "zipcode" => "92998-3874"
        ],
        "phone" => "1-770-736-8301 x5 64 42",
        "website" => "hildegard.org"
    ];

    $newData = [
        "name" => "Risky Amalia Haris",
        "email" => "amaliaharisr@gmail.com",
        "hobby" => ["coding", "reading"]
    ];

    // Reassign
    // $data1 = [...$data, ...$newData];
    // print_r($data1);

    $data["name"] = "Risky Amalia Haris";
    $data["email"] = "amaliaharisr@gmail.com";
    $data["hobby"] = ["coding", "reading"];

    print_r($data);
    echo "<br /> <br />";
    // Destracturing
    ['street' => $street, 'city' => $city] = $data["address"];
    echo "Street = $street <br /> city = $city";

    

    
?>