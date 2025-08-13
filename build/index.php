<?php require_once "inc/header.php"; ?>



<body class="bg-[#FBFBFB]">

<?php require_once "inc/nav.php"; ?>





<!-- Teacher  -->

<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10">
  <div>
    <h1 class="text-black lg:text-4xl text-2xl font-semibold">
        Our Expert Teacher
      </h1>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:pt-8 pt-5">
    
    <!-- Teacher Card 1 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="https://via.placeholder.com/150" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">John Doe</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Digital Marketing</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
         5+ years in SEO & social media marketing.
        Helps brands grow through online strategies.
      </p>
    </div>

    <!-- Teacher Card 2 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="https://via.placeholder.com/150" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Sarah Smith</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Game Development</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        8+ years of experience in Unity & Unreal Engine.
        Expert in creating interactive game worlds.
      </p>
    </div>

    <!-- Teacher Card 3 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="https://via.placeholder.com/150" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Michael Lee</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Graphic Desingning</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        7+ years in creative design & branding.
        Pro in Photoshop, Illustrator & Figma.
      </p>
    </div>

    <!-- Teacher Card 4 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="https://via.placeholder.com/150" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Emily Brown</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Front End Development</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        6+ years building responsive UIs.
        Specialist in React, Tailwind, and Vue.
      </p>
    </div>

  </div>
</section>

<!-- testimonials  -->
<section class="xl:py-20 py-10 xl:px-20 lg:px-10 px-5">
  <h2 class="text-4xl font-bold text-center text-black mb-12">Testimonials</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Testimonial Card -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "Learn2Earn Hub made me a confident frontend developer. The instructors are amazing and the content is very practical!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Mahmoud Mohamed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Frontend Developer</p>
        </div>
      </div>
    </div>

    <!-- Repeat for other testimonials -->

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "The graphic designing course helped me build a strong portfolio. Highly recommend for creative learners!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Sara Ahmed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Graphic Designer</p>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "With Learn2Earn's digital marketing course, I grew my freelance career. Great mentorship and support!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="https://via.placeholder.com/60" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-gray-300">Usman Raza</h4>
          <p class="text-sm text-gray-400 group-hover:text-gray-300">Digital Marketer</p>
        </div>
      </div>
    </div>

  </div>
</section>


<?php require_once "inc/footer.php"; ?>


</body>
</html>