### Документация к  запуску проекта: Репозиторий библиотеки

## Для запуска репозитория библиотеки необходимо выполнить следующие действия:
1.	Установить Docker https://docs.docker.com/docker-for-windows/install/
2.	Склонировать проект https://github.com/PhBouzid/LibraryRepository/issues
3.	После установки перейти в директорию с проектом cd …/LibraryRepository
4.	Выполнить команду docker-compose up

В случае если возникла проблема с развертыванием проекта, необходимо проверить, не заняты ли следующие порты:

•	NGINX – 80
•	MySQL – 3306
•	Adminer – 8080
В противном случае можно внести изменения в файл docker-compose.yaml
Для проблемного сервиса нужно изменить тег ports, который имеет следующий формат
ports:
	-{{ Номер порта который используется в контейнере}}:{{ Номер порта хост машины к которому необходимо привязать порт контейнера }}
То есть, порта контейнера остаётся неизменным, единственное что нужно сделать, это сменить порт хоста, или иными словами если используется порт 8080
Было:
ports:
-	8080:8080
Стало:
ports:
-	8080:8081 ( или любой другой порт )
т.к таблицы в базе отстутствуют необходимо добавить следующую строчку в docker-compose.yaml

command: bash -c 'php artisan migrate:fresh && php artisan serve'


