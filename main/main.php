<?php

class BayDin
{

    public function connectJson()
    {
        $json_file = 'MinTheinKha.LatHtaukBayDin.json';

        $json_data = file_get_contents($json_file);

        $data = json_decode($json_data, true);

        return $data;
    }

    public function question()
    {
        $data = $this->connectJson();

        $questions = $data['questions'];

        return $questions;
    }

    public function getId()
    {
        $id = $_GET['id'];

        return $id;
    }

    public function changeJsonData()
    {
        $data = $this->connectJson();
        $numbers = $data['numberList'];

        $burmeseNumber = '၁,၂,၃,၄,၅,၆,၇,၈,၉,၁၀';


        function convertBurmeseToEnglish($burmeseNumber)
        {
            $burmeseToEnglish = [
                '၀' => '0',
                '၁' => '1',
                '၂' => '2',
                '၃' => '3',
                '၄' => '4',
                '၅' => '5',
                '၆' => '6',
                '၇' => '7',
                '၈' => '8',
                '၉' => '9',
                '၁၀' => '10',
            ];

            return strtr($burmeseNumber, $burmeseToEnglish);
        }
        $englishNumber = convertBurmeseToEnglish($burmeseNumber);


        $arrayWithEnglishNumbers = array_map('convertBurmeseToEnglish', $numbers);

        return $arrayWithEnglishNumbers;
    }

    public function answer()
    {
        $data = $this->connectJson();


        $answers = $data['answers'];

        return $answers;
    }

    public function searchQuestion()
    {
        $searchQuestions = $_POST['searchQuestions'];

        return $searchQuestions;
    }

    public function search()
    {
        $data = $this->connectJson();
        $questions = $this->question();
        $searchQuestions = $this->searchQuestion();

        $results = array_filter($questions, function ($item) use ($searchQuestions) {
            return stripos($item['questionName'], $searchQuestions) !== false;
        });

        return $results;
    }
}

$baydin = new BayDin();
