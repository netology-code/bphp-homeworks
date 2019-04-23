# Задание 2.2.3 - Модель доступа к данным

## Легенда
Работать с данными, которые находятся в файле не очень удобно. В связи с этим Ваш коллег реализовыал два класса:
- `JsonObjDataModel`
- `DataRecordModel`

Вам требуется, используя эти классы, создать страницу отображения пользователей с формой добавления пользователей.

## Техническое задание
Требуется реализовать класс `User` (дочерний от DataRecordModel)
`User`:
-  Свойства:
   - `name` - public, string;
   - `email` - public, string;
   - `password` - public, string;
   - `rate` - public, int;
-  Методы:
   - `displaySortedList();` - public - вывод списка всех пользователей;
   - `addUserFromForm()` - public - создание пользователя на основе данных, пришедших с формы;
   
## Рекомендации по выполнению
**Cтруктура проекта:** 
- index.php
- autoload.php
- classes/DataRecordModel.php
- classes/JsonFileAccessModel.php
- classes/JsonObjDataModel.php
- classes/Singleton.php
- classes/User.php
- forms/addUser.php
- config/SystemConfig.php
- files/database/user.json

**В задании требуется:**
1. Скопировать файлы из второго задания
2. Добавить файлы [JsonObjDataModel.php](./source/JsonObjDataModel.php), [DataRecordModel.php](./source/DataRecordModel.php), [user.json](./source/user.json)
3. В классе SystemConfig должна находиться константа `DATABASE_PATH = '/files/database/'
4. В начале файла index.php должны быть подключены автозагрузка и настройки
5. Описать класс `User`
6. Описать метод `addUserFromForm` для класса `User` с добавлением пользователя и сохранением его в файл
7. Описать метод `displaySortedList` для класса `User`, возвращающий список пользователей (без паролей) в алфавитном порядке
8. Описать на странице index.php загрузку списка с помощью метода `displaySortedList` класса `User`
9. Описать форму создания пользователя, описать добавление пользователя с помощью метода `addUserFromForm` класса `User`.

**Дополнительная информация**
Для того, чтобы получить список пользователей, хронящийся в файле user.json, требуется:
```
$test = new User;
$test->data()->newQuery()->getObjs();
```
Если надо отсортировать список при этом по полю `rate`, требуется изменить команду:
```
$test->data()->newQuery()->orderBy('rate')->getObjs();
```
Для того, чтобы создать нового пользователя требуется: 
```
$test2 = new User;
$test2->create();
```
Чтобы сохранить его:
```
$test2->commit();
```

## Дополнительно, по желанию
Добавить возможность удаления пользователей.
