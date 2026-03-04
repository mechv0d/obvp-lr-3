#!/bin/bash
LOG="/tmp/ubuntu_log_$(date +%s).log"
curl -s https://yandex.ru/games >> "$LOG"
echo "$(date): Request completed" >> "$LOG"
