# THN-Test
This project was made with PHP v7.2 with Symfony 4
The main goal was to return basic info of a hotel but also information about rooms and reservations. 
### About project
There are some repos and/or libraries used to take notice:
- raulquiros symfony4 ddd skeleton from: https://github.com/raulquiros/symfony4-ddd-skeleton
- league/tactician from: https://github.com/thephpleague/tactician-bundle
- doctrine pack
### Installation
Requirements:
- PHP 7.2+
- MySQL

Steps:
- Download/Clone project.
- composer install
- create database on localhost and import .sql in root folder
 
You'll also need a web server. I used XAMPP and created a vhost (www.thn.local)
### Usage
This project was created in order to simulate a call that returns basic info from a hotel such as name, description, address. Also it returns rooms and reservations made from users.

There are some considerations to take notice:
- I assume that there's no rooms limit nor reservations limit. 
- There's no POST calls to create hotels, rooms, reservations or users. So, for the purpose of this project, is needed, you need to create them directly from database.
- Rooms are all the same, so you don't book a specific room but a generic hotel room.
## Request
To see the information from a hotel, go to:
```
<path-to-project>/index.php/api/hotel/getInfo/{id} 
```
## More about this project
- This project was created following a DDD architechture to ensure scalability and easy maintenance.
- I would like to create more Exceptions and tests, but given that there's only one request there's not much to work with.
- There was 3 goals for this project: Return basic info, return rooms information and booked rooms. I decided to join them in a single call using relations and building a specific response.
- I tried to keep it simple and clean and to make it as most disangaged from a framework as I could.

Jorge Escalante Salaya
essajole@gmail.com
https://jorgelie.github.io/