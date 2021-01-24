<?php

namespace Floravel\HumanComparator;

class Human
{
    /**
     * @var string
     */
    private static string $humanStaticName;
    private string $humanName;
    private string $humanName2;
    private string $country;
    private array $information = [
        'germany' => 'You live in germany, germany is a country in the middle of europe',
        'other' => 'You don\'t life in germany',
    ];

//    public function __construct(string $humanParameterName)
//    {
//        $this->humanName = $humanParameterName;
//        $humanName2 = self::$humanStaticName;
//    }

    public static function fromHumanName($name): string
    {
        self::$humanStaticName = $name;

        return self::$humanStaticName;
    }

    public function toData() : string
    {
        return $this->country;
    }
}
