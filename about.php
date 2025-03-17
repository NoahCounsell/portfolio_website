<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <div class="relative">
      <?php include 'nav.php'; ?>
      <div>
        <div class="relative overflow-hidden">
          <video src="banner.mp4" class="hidden md:block w-full md:h-auto h-[50vh] object-cover" autoplay muted loop id="banner"></video>
          <img src="mobile-banner.png" class="md:hidden w-full h-[50vh] object-cover" alt="Mobile banner">
        </div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-8 text-white font-serif text-center">
          <div class="lg:text-6xl md:text-3xl text-2xl">About Us.</div>
          <div class="lg:text-xl md:text-xl text-md">We are the next generation of filmmakers</div>
        </div>
      </div>
    </div>
      </div>
      <div class="w-full h-auto p-10 space-y-2">
        <div class="flex lg:flex-row md:flex-row flex-col">
          <div class="w-full md:w-3/4 lg:w-3/4 pb-5">
            <div class="text-4xl font-extralight">Who am I</div>
            <div class="max-w-[1100px] font-extralight text-base md:text-lg">I am a solo filmmaker based in the Brighton area, passionate about creating films that resonate with people, I love collaborating with like-minded individuals and companies to bring powerful ideas to life. if you think i can offer somthing you need, hit me up and we can get started right away</div>
          </div>
          <div class="md:w-1/4 lg:w-1/4">
            <img src="BIO_SHOT.jpg" alt="" class="w-full">
            <div class="text-sm text-gray-600 pt-[1px]">Me</div>
          </div>
        </div>
      </div>
        <script src="" async defer></script>
        <?php include 'footer.php'; ?>
    </body>
</html>
