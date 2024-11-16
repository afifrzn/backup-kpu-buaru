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
    <h1 class="text-[56px] text-center text-[#4169E1] font-semibold mt-[70px]">Calon Anggota Osis</h1>
    <div class="anggota mt-[53px] grid grid-cols-4 place-content-center gap-x-[16px] gap-y-[24px]">
        @foreach ($anggotas as $index => $anggotaItem)
        <form method="POST" action="{{ route('voteag') }}" class="w-[356px] bg-white rounded-[24px] border-[2px] border-[#D9D9D9] px-[8px] pt-[8px] pb-[20px] relative">
            @csrf
            <input type="hidden" name="id_anggota" value="{{ $anggotaItem->id }}">
            <div class="w-[48px] h-[48px] bg-[#4169E1] rounded-full flex justify-center items-center text-white font-semibold text-[24px] right-0 mt-[12px] mr-[24px] absolute">
                {{ $index + 1 }}
            </div>
            <div class="overflow-hidden w-[334px] h-[274px] rounded-[15px]">
                <img class="w-[334px] h-[274px] object-cover object-center" src="/assets/images/{{ $anggotaItem->foto }}" alt="">
            </div>
            <div class="mt-[18px] ml-[15px]">
                <h1 class="text-[22px] font-semibold text-[#4169E1]">{{ $anggotaItem->nama_anggota }}</h1>
            </div>
            <div class="flex gap-x-[8px] mt-[24px] ml-[15px]">
                <input type="hidden" name="anggota_id" value="{{ $anggotaItem->id }}">
                <button type="submit" class="w-[185px] h-[42px] bg-[#4169E1] text-white font-semibold rounded-[6px]">Vote!</button>
                <button type="button" class="visi-misi-button w-[117px] h-[42px] bg-white border-[2px] border-[#D9D9D9] font-semibold rounded-[6px]"
                        data-visi="{{ $anggotaItem->visi }}"
                        data-misi="{{ $anggotaItem->misi }}">Visi Misi</button>
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

      // Tampilkan popup saat tombol "Visi Misi" diklik
      visiMisiButtons.forEach(button => {
          button.addEventListener('click', () => {
              const visi = button.getAttribute('data-visi');
              const misi = button.getAttribute('data-misi');

              document.getElementById('visi-content').innerText = visi;
              document.getElementById('misi-content').innerText = misi;

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
