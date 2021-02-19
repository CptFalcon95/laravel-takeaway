<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Str;


class MenuEditor extends Component
{
    public $formCatName;
    public $formCatDesc;
    public $formParentCat;

    public $formProductName;
    public $formProductDesc;
    public $formProductPrice;
    public $formCatId;

    public $menuData = [
        3 => [
            "name" => "Pizza's",
            "desc" => "Lorem ipsum dolor sit amet",
            "products" => [
                0 => [
                    "name" => "napolitana",
                    "price" => "7.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                1 => [
                    "name" => "quatro formaggi",
                    "price" => "8.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                2 => [
                    "name" => "paesana",
                    "price" => "8.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                3 => [
                    "name" => "pepperoni",
                    "price" => "6.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ]
            ]
        ],
        0 => [
            "name" => "Pizza's",
            "desc" => "Lorem ipsum dolor sit amet",
            "products" => [
                0 => [
                    "name" => "napolitana",
                    "price" => "7.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                1 => [
                    "name" => "quatro formaggi",
                    "price" => "8.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                2 => [
                    "name" => "paesana",
                    "price" => "8.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ],
                3 => [
                    "name" => "pepperoni",
                    "price" => "6.50",
                    "desc" => "Lorem ipsum dolor sit amet"
                ]
            ]
        ],
    ];

    public function addCategory() 
    {
        $this->menuData[Str::random(10)] = [
            "name" => $this->formCatName,
            "desc" => $this->formCatDesc,
            "products" => []
        ];
    }

    public function addProduct($categoryId) 
    {
        dd($categoryId);
        $this->menuData[$categoryId]["products"][Str::random(10)] = [
            "name" => $this->formProductName,
            "price" => $this->formProductPrice,
            "desc" => $this->formProductDesc
        ];
    }

    public function render()
    {
        return view('livewire.menu-editor');
    }
}
