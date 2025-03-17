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
              <div class="lg:text-6xl md:text-3xl text-2xl">No Entry Studio.</div>
              <div class="lg:text-xl md:text-xl text-md">We are the next generation of filmmakers</div>
            </div>
          </div>
        </div>
        <div class="p-4 md:p-10 w-full h-auto font-extralight">
            <div class="text-4xl text-center md:text-left">Services</div>
            <div class="text-lg text-center md:text-left">No Entry Studio is a company devoted to creating unique videos for companies and individuals.</div>

            <div class="mt-6 bg-orange-100 p-2">
                <div class="text-2xl text-center md:text-left">Videography</div>
                <div class="pb-1">We provide 16:9 & 3:4 aspect ratio footage as well as 4K realtime videos and HD slow motion, and options for portrait or landscape footage.</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2">Music Videos</li>
                    <li class="pl-2">Interviews</li>
                    <li class="pl-2">Cinematic B-roll</li>
                </ul>
            </div>

            <div class="mt-6 bg-blue-100 p-2">
                <div class="text-2xl text-center md:text-left">Photography</div>
                <div class="pb-1">If you sell products, photos are a no-brainer. If you are an upcoming model, your portfolio is everything. We can help you.</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2">Product Photography</li>
                    <li class="pl-2">Portraiture / Group Portraiture</li>
                </ul>
            </div>

            <div class="mt-6 bg-purple-100 p-2">
                <div class="text-2xl text-center md:text-left">You can tell your friends that...</div>
                <ul class="list-['-'] ml-5">
                    <li class="pl-2 font-extralight">All the content is original and created exclusively for you.</li>
                    <li class="pl-2 font-extralight">Your videos were shot at 4K 24fps<sup>*</sup></li>
                    <li class="pl-2 font-extralight">Your videos were edited using professional grade software from Apple and Adobe.</li>
                    <li class="pl-2 font-extralight">Your images have a resolution of 24MP.</li>
                    <li class="pl-2 font-extralight">All the music is royalty free.</li>
                </ul>
            </div>

            <div class="mt-6 bg-gray-100 p-2">
                <div class="pl-2 font-extralight"><span>* </span>All realtime 24fps videos are taken in camera at 4K, the videos may undergo post production process that alter resolution or if you request slow motion (120fps) the resolution will be compromised</div>
            </div>

        </div>
        <script src="" async defer></script>
        <?php include 'footer.php'; ?>
    </body>
</html>