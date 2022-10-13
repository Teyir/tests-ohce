<?php

class utils
{

    public array $langCode = ["fr", "en", "ru"];

    public function sayLn(string...$contents): void
    {
        foreach ($contents as $content) {
            echo "\n$content\n";
        }
    }

    public function say(string...$contents): void
    {
        foreach ($contents as $content) {
            echo "$content \n";
        }
    }

    public function read(): ?string
    {
        return readline("> ");
    }

    public function emptyArgs(): void
    {
        $this->sayLn("Voici la commande à executer: php ohce say");
    }

    public function getPrefix(string $lang): string
    {
        $hour = date('H');
        if($hour <= 18){
            return match ($lang) {
                "en" => "Hello",
                "ru" => "Привет",
                default => "Bonjour",
            };
        }

        return match ($lang) {
            "en" => "Good evening",
            "ru" => "Добрый вечер",
            default => "Bonsoir",
        };
    }

    public function getTranslatedSelect(string $lang): string
    {
        return match ($lang) {
            "en" => "Please enter what you want to send:",
            "ru" => "Пожалуйста, введите, что вы хотите отправить:",
            default => "Veuillez entrer ce que vous voulez envoyer:",
        };
    }

    public function getTranslatedOutputPrefix(string $lang): string
    {
        return match ($lang) {
            "en" => "Your input: ",
            "ru" => "Ваша запись: ",
            default => "Votre entrée: ",
        };
    }

    public function isPalindrome(string $string): bool{
        return strrev($string) === $string;
    }

    public function checkPalindrome(string $string, string $lang): ?string{
        if($this->isPalindrome($string)){
            return match ($lang) {
                "en" => "Well said !",
                "ru" => "Хорошо сказано !",
                default => "Bien dit !",
            };
        }
        return "";
    }

}