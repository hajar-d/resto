<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<style>
    .slider__wrapper{
        padding: 50px 15px;
        max-width: 1320px;
        margin: 0 auto;
    }
</style>

<body>

@section('title')
    About
@endsection
@extends('layouts.master')
@section('main')

<div class="slider__wrapper">
<div class="splide pt-5">
    <div class="splide__track">
        <div class="splide__list">
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/cf/fa/71/la-vue-sur-notre-dame.jpg?w=600&h=-1&s=1" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/26/49/00/restaurant-la-grande.jpg?w=600&h=-1&s=1" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/39/4c/80/interieur-restaurant.jpg?w=600&h=-1&s=1" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://assets-global.website-files.com/653fc88a6eb6c6980a6133ec/65afe30f8e56e4f04a39550b_Hearth_Oct2023_158.jpeg" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://res.cloudinary.com/the-infatuation/image/upload/f_auto/q_auto/v1688742723/images/Principe-Food_Ambiance-Kate_Previte_cqtipe.jpg" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8JTIzcmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/38/f0/66/origines-restaurant.jpg" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/cf/fa/71/la-vue-sur-notre-dame.jpg?w=600&h=-1&s=1" alt="">
                </div>
            </div>
            <div class="splide__slide">
                <div class="img_box">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/38/f0/66/origines-restaurant.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="mt-5 w-4/5 m-auto">
    <header class="mb-8">
        <h1 class="text-3xl font-bold font-sans text-gray-700">THE TABLE</h1>
    </header>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Welcome to Restaurant THE TABLE</h2>
        <p class="text-gray-500">We believe in serving delicious meals with a touch of warmth and hospitality. Our journey began in <a href="#" class='text-blue-500 font-bold'>2004</a>, and ever since, we've been dedicated to providing memorable dining experiences for our guests.</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Our Story</h2>
        <p class="text-gray-500">Founded in <a href="#" class='text-blue-500 font-bold'>2005</a>, Restaurant <a href="#" class='text-blue-500 font-bold'>THE TABLE</a> started as a humble family-owned establishment in [location]. Our founder, [Founder's Name], had a passion for [cuisine/type of food], and he envisioned creating a space where people could gather, enjoy great food, and make lasting memories.</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Mission and Values</h2>
        <p class="text-gray-500">At Restaurant Name, our mission is simple: to delight our guests with exceptional culinary experiences while fostering a sense of community and connection. We believe in sourcing the finest ingredients, supporting local producers, and providing attentive service that exceeds expectations.</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Meet the Team</h2>
        <p class="text-gray-500">Meet our talented team of culinary experts led by our Executive Chef <a href="#" class='text-blue-500 font-bold'>[Chef's Name]</a> . With years of experience and a passion for creativity, they work tirelessly to craft innovative dishes that showcase the flavors of [region/cuisine].</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Our Specialties</h2>
        <p class="text-gray-500">From our mouthwatering Signature Dish to our indulgent Specialty Dessert, each item on our menu is carefully crafted to tantalize your taste buds. Don't forget to try our Unique Ingredient sourced directly from local farms for a truly farm-to-table experience.</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Community Engagement</h2>
        <p class="text-gray-500">At Restaurant Name, we're proud to give back to the community that has supported us. From hosting fundraisers for local charities to implementing eco-friendly practices in our kitchen, we're committed to making a positive impact on both our guests and the environment.</p>
    </section>
    <section class="mb-8">
        <h2 class="text-xl font-bold mb-4">Visit Us</h2>
        <p class="text-gray-500">Ready to experience Restaurant Name for yourself? Visit us at <a href="#" class='text-blue-500'>Parking public Saemes Mairie du 15ème à 50 mètres Lecourbe : 143 Rue Lecourbe, 75015 Paris (24h/24h)</a> in <a href="#" class='text-blue-500'>Agadir</a> ,</p>
            <p><a href="#" class='text-blue-500 font-bold'>Morocco</a> . For reservations, please call a <a href="#" class='text-blue-500'>06 23 45 63 89</a>  or book online through our website. We can't wait to welcome you to our table!</p>
    </section>
    <section class="my-14">
        <p class="font-bold">Se rendre à THE TABLE :</p>
        <p>Voiture : <a href="#" class='text-blue-500'>Parking public Saemes Mairie du 15ème à 50 mètres Lecourbe : 143 Rue Lecourbe, 75015 Paris (24h/24h)</a></p>
        <p>Metro : 8, 12</p>
        <p>Bus : 70, 88</p>
    </section>
    <section>
        <p class="font-bold">Langues parlées</p>
            <a href="#" class="-m-2 flex items-center p-2">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png" alt="" class="block h-auto w-5 flex-shrink-0 mr-4 my-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/2560px-Flag_of_Saudi_Arabia.svg.png" alt="" class="block h-auto w-5 flex-shrink-0 mr-4 my-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/2560px-Flag_of_the_United_States.svg.png" alt="" class="block h-auto w-5 flex-shrink-0 mr-4 my-4">
            </a>
    </section>

    <section>
        <p class="font-bold">Moyens de paiement</p>
            <a href="#" class="-m-2 flex items-center p-2">
              <img src="https://static-00.iconduck.com/assets.00/visa-icon-2048x1313-a4r9sbqh.png" alt="" class="block h-auto w-8 flex-shrink-0 mr-8 my-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png" alt="" class="block h-auto w-8 flex-shrink-0 mr-8 my-4">
              <img src="https://png.pngtree.com/png-clipart/20200225/original/pngtree-coin-money-icon-png-image_5278199.jpg" alt="" class="block h-auto w-8 flex-shrink-0 mr-8 my-4">
            </a>
    </section>

    <section>
        <h2 class="text-xl font-bold mb-4">Call to Action</h2>
        <p class="text-gray-500">Ready to embark on a culinary journey with us? Explore our menu, make a reservation, or connect with us on social media to stay updated on the latest specials and events. We look forward to sharing unforgettable moments with you!</p>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js">
</script>
<script type="text/javascript">
var splide = new Splide( '.splide', {
  perPage: 3,
  perMove: 1,
  padding: '3rem',
  autoplay: true,
  gap    : '2rem',
  breakpoints: {
    640: {
      perPage: 2,
      gap    : '.7rem',
    },
    480: {
      perPage: 1,
      gap    : '.7rem',
    },
  },
} );

splide.mount();
</script>
@endsection

</body>
</html>
