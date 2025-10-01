<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <script>
    tailwind.config = {
      theme: {
        extend:{
          spacing: {
          13: '3.25rem',
         },
         fontFamily: {
            inter: ['Inter'],
         },
         colors: {
            kopi: '#c0ffee',
         }
        }
      }
    }
  </script>
  <title>Belajar TailwindCSS</title>
  <style></style>
</head>
<body>

    <h1 class="text-8xl font-bold text-center my-10 bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Mari Belajar TailwindCSS</h1>

  <section class="mb-10 bg-gradient-to-tr from-indigo-200 via-red-300 to-yellow-200">
    <h2 class="text-3xl text-center">Spacing</h2>
    <div class="m-12">Margin</div>
    <div class="p-12 ">Padding</div>
  </section>

  <section class="mb-10 bg-green-100">
    <h2 class="bg-green-200 text-center text-3xl">Sizing</h2>
    <div class="w-32 h-32 bg-kopi">Kotak 1</div>
  </section>

  <section class="font-inter max-w-3xl mx-auto">
    <h2 class="mb-4 text-4xl font-bold">Belajar Mengenai Typography pada <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">TailwindCSS</span></h2>
    <div class="mb-4 text-4xl text-gray-600">
        By <a href="#" class="text-gray-700 font-semibold">RafiArizRahmal</a>, 1 Oktober 2025</div>
        <p class="mb-4">
            Lorem, ipsum dolor sit amet <a href="#" class="underline font-semibold text-blue-600">consectetur</a> adipisicing elit. 
            Consequatur illo tempora nam quidem eum, dolor corrupti mollitia doloremque cupiditate 
            facilis laborum commodi! Perferendis porro aspernatur quaerat, autem veritatis aliquid ab!
        </p>
        <blockquote class="mb-4 italic font-thin text-xl">"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Maiores ipsa dicta repellendus, alias aperiam laborum eveniet 
            voluptatum natus at corporis.""
        </blockquote>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam possimus, 
            cum minus sunt doloremque quia iusto quidem pariatur labore voluptate quo eos 
            esse corporis distinctio enim numquam commodi omnis iure!
        </p>
  </section>

  <section>

    <div class="max-w-xl h-96 bg-slate-300"></div>

  </section>

</body>
</html>