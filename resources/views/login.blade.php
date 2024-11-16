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
    <img class="center" src="/assets/images/telkomkpu.png" alt="">
    <div class="flex items-end gap-x-[51px] mt-[66px]">
        <img class="mb-[-21px]" src="/assets/images/quote1.png" alt="">
        <h1 class="text-[64px] text-center text-[#FF2929] font-semibold">
            Welcome to E-voting</br>
            SMK TELKOM SIDOARJO</h1>
        <img class="mb-[148px]" src="/assets/images/quote2.png" alt="">
    </div>

    <!-- Form login -->
    <form method="POST" action="/login" class="flex flex-col items-start gap-y-[42px] mt-[39px]">
        @csrf
        <div class="flex flex-col gap-y-[6px]">
            <label class="text-[22px] text-[#0B50B7] font-normal" for="">Nama</label>
            <input class="text-[22px] w-[684px] h-[92px] border-[3px] broder-[#D0D0D0] pl-[21px]" type="text" name="nama" id="" required>
        </div>
        <div class="flex flex-col gap-y-[6px]">
            <label class="text-[22px] text-[#0B50B7] font-normal" for="">KODE MASUK</label>
            <input class="text-[22px] w-[684px] h-[92px] border-[3px] broder-[#D0D0D0] pl-[21px]" type="text" name="kode" id="" required>
        </div>
        <button class="w-[211px] h-[71px] bg-[#4169E1] rounded-[12px] text-[22px] text-white font-semibold" type="submit">Yuk Milih!</button>
    </form>

    <!-- Popup error -->
    @if (session('error'))
    <div id="error-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
      <div class="bg-white rounded-lg p-6 w-1/3">
        <h2 class="text-xl font-bold text-red-600">Login Gagal</h2>
        <p class="mt-4">{{ session('error') }}</p>
        <button id="close-popup" class="mt-4 w-full h-10 bg-red-600 text-white font-semibold rounded-md">Tutup</button>
      </div>
    </div>
    @endif

  </div>

  <script>
    // Tutup popup error
    const errorPopup = document.getElementById('error-popup');
    const closeButton = document.getElementById('close-popup');

    if (closeButton) {
      closeButton.addEventListener('click', () => {
        errorPopup.classList.add('hidden');
      });

      // Tutup popup jika klik di luar area modal
      errorPopup.addEventListener('click', (event) => {
        if (event.target === errorPopup) {
          errorPopup.classList.add('hidden');
        }
      });
    }
  </script>
</body>
</html>
