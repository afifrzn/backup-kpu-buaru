<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body class="all">
  <div class="flex w-full flex-col items-center pt-[58px] relative">
    <img class="absolute top-0 left-0 m-[27px]" src="/assets/images/patternkiri.png" alt="">
    <img class="absolute top-0 right-0 m-[27px]" src="/assets/images/patternkanan.png" alt="">
    <img src="/assets/images/osislogo.png" alt="">
    <h1 class="text-[56px] text-center text-[#4169E1] font-semibold mt-[70px]">Calon Ketos dan Waketos</h1>

    <div class="mt-[53px] flex gap-x-[16px]">
        @foreach ($paslons as $paslon)
        <form action="{{ route('vote') }}" method="POST" class="w-[356px] h-[456px] bg-white rounded-[24px] border-[2px] border-[#D9D9D9] px-[8px] pt-[8px] relative">
            @csrf
            <input type="hidden" name="id_paslon" value="{{ $paslon->id }}">
            <img class="absolute mt-[-10px] ml-[-22px]" src="/assets/images/paslon{{ $paslon->id }}.svg" alt="">
            <div class="overflow-hidden w-[334px] h-[274px] rounded-[15px]">
                <img class="object-cover object-center w-[334px] h-[274px]" src="{{ asset('assets/images/'.$paslon->foto) }}" alt="">
            </div>
            <div class="mt-[18px] ml-[15px]">
                <h1 class="text-[18px] font-semibold truncate"><span class="text-[#4169E1]">Caketos:</span> {{ $paslon->nama_ketos }}</h1>
                <h1 class="text-[18px] font-semibold truncate"><span class="text-[#4169E1]">Cawaketos:</span> {{ $paslon->nama_waketos }}</h1>
            </div>
            <div class="flex gap-x-[8px] mt-[36px] ml-[15px]">
                <button type="submit" class="w-[185px] h-[42px] bg-[#4169E1] text-white font-semibold rounded-[6px]">Vote!</button>
                <button type="button" class="visi-misi-button w-[117px] h-[42px] bg-white border-[2px] border-[#D9D9D9] font-semibold rounded-[6px]" data-visi="{{ $paslon->visi }}" data-misi="{{ $paslon->misi }}">Visi Misi</button>
            </div>
        </form>
        @endforeach
    </div>
  </div>

  <!-- Popup Modal -->
  <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 w-1/3">
      <h2 class="text-xl font-bold text-[#4169E1]">Visi Misi</h2>
      <div class="mt-4">
        <h3 class="font-semibold">Visi:</h3>
        <p id="visi-content"></p>
      </div>
      <div class="mt-4">
        <h3 class="font-semibold">Misi:</h3>
        <p id="misi-content"></p>
      </div>
      <button id="close-popup" class="mt-4 w-full h-10 bg-[#4169E1] text-white font-semibold rounded-md">Tutup</button>
    </div>
  </div>

  <script>
    // Ambil elemen popup dan tombol
    const popup = document.getElementById('popup');
    const visiMisiButtons = document.querySelectorAll('.visi-misi-button');
    const closeButton = document.getElementById('close-popup');
    const visiContent = document.getElementById('visi-content');
    const misiContent = document.getElementById('misi-content');

    // Tampilkan popup saat tombol "Visi Misi" diklik
    visiMisiButtons.forEach(button => {
      button.addEventListener('click', () => {
        visiContent.textContent = button.getAttribute('data-visi');
        misiContent.textContent = button.getAttribute('data-misi');
        popup.classList.remove('hidden');
      });
    });

    // Tutup popup saat tombol "Tutup" diklik
    closeButton.addEventListener('click', () => {
      popup.classList.add('hidden');
    });

    // Tutup popup saat area di luar popup diklik
    popup.addEventListener('click', (event) => {
      if (event.target === popup) {
        popup.classList.add('hidden');
      }
    });
  </script>
</body>
</html>
