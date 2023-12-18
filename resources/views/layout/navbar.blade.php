<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
  <div class="max-w-screen-xl mx-auto p-4">
    <div class="flex justify-center items-center">
      <ul class="flex flex-col md:flex-row md:justify-center md:space-x-40 rtl:space-x-reverse">
        <li class="{{Request::is('infopendaftaran') ? 'active' : ''}}">
          <a href="{{'infopendaftaran'}}" class="block py-2 px-3 rounded hover:bg-gray-100 dark:text-white dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white {{ Request::is('infopendaftaran') ? 'text-white bg-blue-700' : 'text-gray-900' }}">Informasi Beasiswa</a>
        </li>
        <li class="{{Request::is('formpendaftaran') ? 'active' : ''}}">
          <a href="{{'formpendaftaran'}}" class="block py-2 px-3 rounded hover:bg-gray-100 dark:text-white dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white {{ Request::is('formpendaftaran') ? 'text-white bg-blue-700' : 'text-gray-900' }}">Daftar</a>
        </li>
        <li class="{{Request::is('hasil') ? 'active' : ''}}">
          <a href="{{'hasil'}}" class="block py-2 px-3 rounded hover:bg-gray-100 dark:text-white dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white {{ Request::is('hasil') ? 'text-white bg-blue-700' : 'text-gray-900' }}">Hasil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
