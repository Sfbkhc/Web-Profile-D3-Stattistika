<?php

namespace App\Http\Controllers;

use App\View\Components\Profile_Lulusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $data;
    public function __construct()
    {
        $this->data = [
            'Title' => '',
            'Response' => ''
        ];
    }

    public function blog_one()
    {
        $this->data['Title'] = "D3 Statistika | Blog";
        return view('blog_one', $this->data);
    }
    public function Page_Login()
    {
        $this->data['Title'] = "D3 Statistika | Login";
        return view('Sigin', $this->data);
    }
    public function VisiMisi()
    {
        $this->data['Title'] = 'D3 Statistika | Visi & Misi';
        return view('VisiMisi', $this->data);
    }

    public function ProfileLulusan()
    {

        $this->data['Title'] = 'D3 Statistika | Profile Lulusan';
        return view('Profile_Lulusan', $this->data);
    }

    public function StrukturOrg()
    {

        $this->data['Title'] = 'D3 Statistika | Struktur Organisasi';
        return view('Struktur _Organisasi', $this->data);
    }

    public function DosenStatistika()
    {
        $this->data['Title'] = 'D3 Statistika | Dosen Pengajar';
        $this->data['Breadcrumbb'] = $this->data['Title'];
        return view('Dosen_Pengajar', $this->data);
    }
    public function Sejarah()
    {
        $this->data['Title'] = 'D3 Statistika | Sejarah';

        return view('Sejarah', $this->data);
    }

    public function Kurikulum()
    {
        $this->data['Title'] = 'D3 Statistika | Kurikulum';
        return view('Kurikulum', $this->data);
    }

    public function landasan_kurikulum()
    {
        $this->data['Title'] = "D3 Statistika | Landasan Kurikulum";
        return view('Landasan_Kurikulum', $this->data);
    }
    public function Tracer_Study()
    {
        $this->data['Title'] = "D3 Statistika | Tracer Study";
        return view('Tracer-Study', $this->data);
    }

    public function evaluasi()
    {
        $this->data['Title'] = "D3 Statistika | Evaluasi Kurikulum";
        return view('Evaluasi_Kurikulum', $this->data);
    }

    public function rps()
    {
        $this->data['Title'] = "D3 Statistika | RPS";

        return view('rps', $this->data);
    }

    public function SM()
    {
        $this->data['Title'] = "D3 Statistika | Struktur Mata-Kuliah";
        return view('struktur_matkul', $this->data);
    }

    public function form_asisten()
    {
        $this->data['Title'] = "D3 Statistika | Form Asisten";
        return view('Form_Asisten', $this->data);
    }

    public function mitra()
    {
        $this->data['Title'] = "D3 Statistika | Mitra";
        return view('mitra', $this->data);
    }
}
