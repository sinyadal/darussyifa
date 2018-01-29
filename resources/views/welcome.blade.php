@extends('layouts.app') @section('content')

<div class="uk-section uk-section-default">
    <div class="uk-container">

        @guest
        <div class="uk-alert-danger" uk-alert>
            <h3>Perhatian!</h3>
            <p>Sila log masuk dahulu.
            </p>
        </div>
        @else @endguest

        <div class="uk-card uk-card-body uk-card-primary">
            <h1 class="uk-card-title">Selamat Datang ke Sistem Pendaftaran Darussyifa'</h1>
            <p>uk-section-variant
            </p>
            <p>Footer
                </p>
        </div>

        <div class="uk-card uk-card-body uk-card-primary">
            <h1 class="uk-card-title">Selamat Datang ke Sistem Pendaftaran Darussyifa'</h1>
            <p>Darussyifa’ merupakan sebuah tempat rawatan yang terkenal di kalangan penduduk Bangi dan masyarakat luar terutamanya
                orang Islam. Ia menjadi satu altematif kepada orang ramai dalam usaha mencari kesembuhan penyakit selepas
                mendapatkan rawatan dari klinik dan hospital. Kebanyakan pesakit yang datang bukan hanya mengalami penyakit
                fizikal tetapi juga melibatkan penyakit rohani seperti terkena ganguan makhluk halus dan seumpamanya. Dengan
                kaedah yang diamalkan oleh Darussyifa’ iaitu menggunakan ayat-ayat al-Qur’an, Hadith dan Doa-doa menambahkan
                lagi keyakinan orang ramai terhadapnya.
            </p>
        </div>
    </div>
</div>



@endsection