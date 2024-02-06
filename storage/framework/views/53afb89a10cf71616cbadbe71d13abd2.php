<!-- component -->
<!DOCTYPE html>
<html>
<head>
<title>404 Error Page Design In Tailwind CSS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style type="text/css">
      .text-9xl{
      font-size: 14rem;
      }
      @media(max-width: 645px){
      .text-9xl{
      font-size: 5.75rem;
      }
      .text-6xl{
      font-size: 1.75rem;
      }
      .text-2xl {
      font-size: 1rem;
      line-height: 1.2rem;
      }
      .py-8 {
      padding-top: 1rem;
      padding-bottom: 1rem;
      }
      .px-6 {
      padding-left: 1.2rem;
      padding-right: 1.2rem;
      }
      .mr-6{
      margin-right: 0.5rem;
      }
      .px-12 {
      padding-left: 1rem;
      padding-right: 1rem;
      }
      }
    </style>
</head>
<body>
    <div class="bg-gray-50">
      <div class="w-9/12 m-auto py-16 min-h-screen flex items-center justify-center">
        <div class="shadow overflow-hidden sm:rounded-lg pb-8">
          <div class="border-t border-gray-200 text-center pt-8">
            <h1 class="text-9xl font-bold text-red-600">404</h1>
            <h1 class="text-6xl font-medium py-8">oops! Page not found</h1>
            <p class="text-2xl pb-8 px-12 font-medium">Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
              <a href="/" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-3 rounded-md mr-6">
              HOME
              </a>
          </div>
        </div>
      </div>
    </div>
</body>
</html><?php /**PATH /Users/nimatshering/Sites/laravel-10-starter-project/resources/views/errors/404.blade.php ENDPATH**/ ?>