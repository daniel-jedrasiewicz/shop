<?php

return [
    'welcome' => [
        'products' => 'Produkty',
        'categories' => 'Kategorie',
        'price' => 'Cena',
        'filter' => 'Filtruj',
    ],
    'columns' => [
        'actions' => 'Akcje'
    ],
    'messages' => [
        'delete_confirm' => 'Czy na pewno chcesz usunąć rekord',
    ],
    'button' => [
        'save' => 'Zapisz',
        'add' => 'Dodaj',
        'delete' => 'Usuń',
        'show' => 'Podgląd',
        'edit' => 'Edycja',
    ],
    'product' => [
        'add_title' => "Dodawanie produktu",
        'edit_title' => "Edycja produktu: :name",
        'show_title' => "Podgląd produktu: :name",
        'index_title' => "Lista produktów",
        'status' => [
            'store' => [
                'success' => 'Produkt został zapisany'
            ],
            'update' => [
                'success' => 'Produkt został zaktualizowany'
            ],
            'delete' => [
                'success' => 'Produkt został usunięty'
            ],
        ],
        'fields' => [
            'name' => "Nazwa",
            'description' => 'Opis',
            'amount' => 'Ilość',
            'price' => 'Cena',
            'image' => 'Grafika',
            'category' => 'Kategoria',
        ]
    ],
    'user' => [
        'index_title' => "Lista użytkowników",
        'edit_title' => "Edycja użytkownika: :name",
        'columns' => [
            'name' => "Imię",
            'surname' => 'Nazwisko',
            'password' => 'Hasło',
            'phone_number' => 'Telefon',
            'email' => 'Email',
            'city' => 'Miasto',
            'zip_code' => 'Kod pocztowy',
            'street' => 'Ulica',
            'street_number' => 'Numer ulicy',
            'home_number' => 'Numer domu',
        ],
        'status' => [
            'store' => [
                'success' => 'Użytkownik został zapisany'
            ],
            'update' => [
                'success' => 'Użytkownik został zaktualizowany'
            ],
            'delete' => [
                'success' => 'Użytkownik został usunięty'
            ],
        ],
    ],
    'cart' => [
        'header' => [
            'shopping_cart' => 'Koszyk'
        ],
        'columns'=> [
            'name' => 'Nazwa',
            'quantity' => 'Ilość',
            'price' => 'Cena',
            'total' => 'Suma',
            'order_total' => 'Podsumowanie',
        ],
        'button' => [
            'continue_shopping' => 'Wróc do sklepu',
            'add_to_cart' => 'Zapłać'
        ]
    ],
    'order' => [
        'header' => [
            'orders' => 'Zamówienia'
        ],
        'columns'=> [
            'quantity' => 'Ilość',
            'price' => 'Cena',
            'products' => 'Produkty',
        ],
    ],

];
