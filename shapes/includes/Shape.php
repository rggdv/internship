<?php

abstract class Shape
{
    public const SHAPE_TYPE = 15;

    public string $name;
    protected float $length;
    protected float $width;
    private string $id;

    public function __construct(string $name, float $width, float $length)
    {
        $this->name = $name;
        $this->length = $length;
        $this->width = $width;

        $this->id = uniqid();
    }

    public static function getTypeDescription()
    {
        return self::SHAPE_TYPE; // 15
    }

    public function getDescription()
    {
        return $this->name . '<' . self::class . '><' . $this->id . '>';
    }

    public function renameTo(string $newName)
    {
        $this->name = $newName;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    abstract public function calculateArea();
}
