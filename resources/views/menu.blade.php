<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
           
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 2rem;
            text-align: center;
            color: #1a202c;
            width: 100%;
            height: 100%; 
            background-image: url('https://media.istockphoto.com/id/1338021526/photo/baked-boiled-pork-baked-meat-slice-with-garlic-and-spices-on-a-wooden-board.jpg?s=612x612&w=0&k=20&c=3wheQnBHiWUbF72j9odBZVW8r-IN6Ej3gGL4NkBXIjI=');
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: white;
        }

        .menu-item {
           
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem;
            transition: transform 0.3s ease;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 300px;
          
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: burlywood;
        }

        .menu-item-description {
            font-size: 1rem;
            margin-bottom: 1rem;
            color: white;
        }

        .menu-item-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: khaki;
        }

        .menu-item-image {
            width: 300px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 4px solid #ffffff;
        }

        .comment-section {
            margin-top: 1rem;
            text-align: left;
        }

        .comment-input {
            width: 50%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            resize: vertical;
        }

        .star-rating {
            font-size: 1.5rem;
            cursor: pointer;
            color: #ccc;
          
        }

        .star-rating:hover {
            color: #f97316;
        }
        p{
            color: #ffffff;
        }
      
    </style>
</head>
<body>
    <!-- Content -->
    
    <div class="content">
      
    <h1>Welcome to Our Restaurant </h1>
    <p class="text-center ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum praesentium error, incidunt optio,<br>
     labore assumenda magni, voluptates asperiores voluptatibus omnis<br>
     soluta sint? Eligendi at veritatis vitae maxime, enim repellendus voluptatum!
   
                   </p>
    @foreach($donnees as $donnee)
        <div class="menu-item">
      
              
               <img src="{{ $donnee->url }}"   class="menu-item-image">
               <h2 class="menu-item-title"> {{ $donnee->name }}</h2>
               <p class="menu-item-description"> {{ $donnee->description }}</p>
               <p class="menu-item-price">${{ $donnee->prix }}</p>
              
                       
                   </div>
              
          
           @endforeach
           <div class="comment-section ml-30">
                   <textarea class="comment-input" placeholder="Add a comment"></textarea>
        </div>
                   <div class="flex items-center ml-9 ">
        <div class="flex">
                           <span class="star-rating">&#9733;</span>
                           <span class="star-rating">&#9733;</span>
                           <span class="star-rating">&#9733;</span>
                           <span class="star-rating">&#9733;</span>
                           <span class="star-rating">&#9733;</span>
                       </div>
                   </div>
       
        </div>
        
   
   
</body>
</html>