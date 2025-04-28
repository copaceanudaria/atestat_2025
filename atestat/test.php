<?php


// Răspunsuri corecte pentru fiecare întrebare
$correct_answers = array(
    "q1" => "B", // Răspuns corect pentru întrebarea 1
    "q2" => "A", // Răspuns corect pentru întrebarea 2
    "q3" => "C", // Răspuns corect pentru întrebarea 3
    "q4" => "B", // Răspuns corect pentru întrebarea 4
    "q5" => "A", // Răspuns corect pentru întrebarea 5
);

// Inițializarea unui contor de puncte
$score = 0;

// Verificarea răspunsurilor trimise prin formular
foreach ($correct_answers as $question => $correct_answer) {
    if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
        $score++;
    }
}

// Afișarea rezultatului
echo "<h1>Rezultatul testului despre Simbolism</h1>";

echo "<p>Ai răspuns corect la " . $score . " întrebări din 5.</p>";

if ($score == 5) {
    echo "<p>Excelent! Ai răspuns corect la toate întrebările.</p>";
} elseif ($score >= 3) {
    echo "<p>Bravo! Ai răspuns corect la mai mult de jumătate dintre întrebări.</p>";
} else {
    echo "<p>Încă mai ai de învățat. Încearcă din nou!</p>";
}

echo "<p><a href='principal.html' class='back-button' style='padding: 10px 20px;
        background-color: #FF5733; /* O culoare caldă și distinctă */
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2rem;
        cursor: pointer;
        text-decoration: none; /* Elimină sublinierea */
        display: inline-block;
        margin-top: 20px;'>Înapoi la pagina principala</a></p>";
?>

