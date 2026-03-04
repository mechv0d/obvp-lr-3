<?php
// Путь к создаваемому bash-скрипту (в той же папке, что и этот файл)
$script_path = dirname(__FILE__) . "/rqscr.sh";
// Путь к файлу лога
$log_path = dirname(__FILE__) . "/log.txt";

// Формируем содержимое bash-скрипта в виде массива строк
$script_line = [
    "#!/bin/bash",
    "COUNT=\$(grep -c 'Запрос отправлен' '$log_path' 2>/dev/null || echo 0)",
    // Если количество запросов меньше 10, выполняем curl-запрос и логируем его
    "if [ \"\$COUNT\" -lt 10 ]; then",  
    "    curl -s https://yandex.ru/games > /dev/null", // запрос к yandex.ru/games без вывода
    "    echo 'Запрос отправлен' >> '$log_path'",      // дописываем строку в лог-файл
    "fi"
];

// Объединяем массив в одну строку с разделителем "новая строка"
$script_content = implode("\n", $script_line);

// Записываем полученный скрипт в файл
file_put_contents($script_path, $script_content);

// Делаем скрипт исполняемым
chmod($script_path, 0755);

// Формируем задание cron для выполнения скрипта каждую минуту
$crl = "*/1 * * * * " . escapeshellcmd($script_path) . "\n";

// Добавляем задание в crontab текущего пользователя
// Команда: (выводим текущий crontab; добавляем новую строку) | передаём crontab на установку
exec("(crontab -l; echo " . escapeshellarg($crl) . ") | crontab -");

// Выводим сообщение об успешном завершении
echo "Базовый скрипт создан. Задача добавлена в cron\n";