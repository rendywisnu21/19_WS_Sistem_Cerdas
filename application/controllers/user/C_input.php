<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_input extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/m_input', 'home');

		error_reporting(0);
	}

    public function index()
	{
		$data['title'] = 'Hitung Kualitas Air';
		
		// Ambil data dari tb_hasil 
		$data['hasil'] = $this->home->getHasil()->result();
		
		$this->load->view('user/v_header', $data);
		$this->load->view('user/v_navbar');
		$this->load->view('user/v_sidebar');
		$this->load->view('user/v_input');
		$this->load->view('user/v_footer');
	}

	public function hitung(){
    $this->form_validation->set_rules('suhu', 'suhu', 'required', 
    ['required' => 'Isian tidak boleh kosong']);

    $this->form_validation->set_rules('ph', 'ph', 'required', 
    ['required' => 'Isian tidak boleh kosong']);

    $this->form_validation->set_rules('tds', 'tds', 'required', 
    ['required' => 'Isian tidak boleh kosong']);

    //jika form validasi salah maka kembali ke index
    if($this->form_validation->run() == false){
        $this->index();
    }

    $suhu  = $this->input->post('suhu');
    // echo '<br>';
    $ph  = $this->input->post('ph');
    // echo '<br>';
    $tds  = $this->input->post('tds');
    // echo '<br>';
    // echo '<br>';


//FUNGSI KEANGGOTAAN
    //menghitung fungsi keanggotaan suhu 
        if(22.5 <= $suhu && $suhu <= 27 )
        {//jika angka diantara 22.5 - 27 maka menggunakan rumus A
            // rumus suhu A 
            if($suhu <= 22.5 OR 27 <= $suhu){
                $suhuA = 0;
            }
            else if(22.5 < $suhu && $suhu <= 25){
                $suhuA = ($suhu-22.5)/(25-22.5);
            }
            else if(25 < $suhu && $suhu <= 26){
                $suhuA = 1;
            }
            else if(26 < $suhu && $suhu < 27){
                $suhuA = (27-$suhu)/(27-26);
            }
        }

        if((17.5 <= $suhu && $suhu <= 25) OR (26 <= $suhu && $suhu <= 29) )
        {//jika angka diantara 17.5 - 25 atau diantara 26-29 maka menggunakan rumus B
            // rumus suhu B
            if(($suhu <= 17.5 OR 29 <= $suhu) OR (25 <= $suhu && $suhu <= 26)){
                $suhuB = 0;
            }
            else if(17.5 < $suhu && $suhu <= 20){
                $suhuB = ($suhu-17.5)/(20-17.5);
            }
            else if((20 <= $suhu && $suhu <= 22.5) OR (27 <= $suhu && $suhu <= 28)){
                $suhuB = 1;
            }
            else if(22.5 < $suhu && $suhu < 25){
                $suhuB = (25-$suhu)/(25-22.5);
            }
            else if(26 < $suhu && $suhu <= 27){
                $suhuB = ($suhu-26)/(27-26);
            }
            else if(28 < $suhu && $suhu < 29){
                $suhuB = (29-$suhu)/(29-28);
            }
        }
        
        if((12.5 <= $suhu && $suhu <= 20) OR (28 <= $suhu && $suhu <= 31) )
        {//jika angka diantara 12.5 - 20 atau diantara 28-31 maka menggunakan rumus C
            // rumus suhu C
            if(($suhu <= 12.5 OR 31 <= $suhu) OR (20 <= $suhu && $suhu <= 28)){
                $suhuC = 0;
            }
            else if(12.5 < $suhu && $suhu < 15){
                $suhuC = ($suhu-12.5)/(15-12.5);
            }
            else if((15 <= $suhu OR $suhu <= 17.5) OR (29 < $suhu OR $suhu <= 30)){
                $suhuC = 1;
            }
            else if(17.5 < $suhu && $suhu < 20){
                $suhuC = (20-$suhu)/(20-17.5);
            }
            else if(28 < $suhu && $suhu < 29){
                $suhuC = ($suhu-28)/(29-28);
            }
            else if(30 < $suhu && $suhu < 31){
                $suhuC = (31-$suhu)/(31-30);
            }
        }
        
        if($suhu <= 15 OR 30 <= $suhu )
        {//jika angka diantara 17.5 - 25 atau diantara 26-29 maka menggunakan rumus D
            // rumus suhu D
            if(15 <= $suhu && $suhu <= 30){
                $suhuD = 0;
            }
            else if(12.5 < $suhu && $suhu < 15){
                $suhuD = ($suhu-12.5)/(15-12.5);
            }
            else if(30 < $suhu && $suhu <= 31){
                $suhuD = (31-$suhu)/(31-30);
            }
            else if($suhu <= 12.5 OR 31 <= $suhu){
                $suhuD = 1;
            }
        }
    //menghitung fungsi keanggotaan suhu END

    //menghitung fungsi keanggotaan PH
        if(6.65 <= $ph && $ph <= 7.7)
        {//jika angka diantara 6.65 - 7.7 maka menggunakan rumus A
            // rumus PH A
            if($ph <= 6.65 && 7.7 <= $ph){
                $phA = 0;
            }
            else if(6.65 < $ph && $ph < 6.8){
                $phA = ($ph-6.65)/(6.8-6.65);
            }
            else if(7.4 < $ph && $ph < 7.7){
                $phA = (7.7-$ph)/(7.7-7.4);
            }
            else if(6.8 <= $ph OR $ph <= 7.4){
                $phA = 1;
            }
        }
        
        if((6 <= $ph && $ph <= 6.8) OR (7.4 <= $ph && $ph <= 8.25) )
        {//jika angka diantara 6 - 6.8 atau diantara 7.4 - 8.2 maka menggunakan rumus B
            // rumus PH B
            if(($ph <= 6 OR 8.25 <= $ph) && (6.8 <= $ph && $ph <= 7.4)){
                $phB = 0;
            }
            else if(6 < $ph && $ph < 6.5){
                $phB = ($ph-6)/(6.5-6);
            }
            else if(6.65 < $ph && $ph < 6.8){
                $phB = (6.8-$ph)/(6.8-6.65);
            }
            else if(7.4 < $ph && $ph < 7.7){
                $phB = ($ph-7.4)/(7.7-7.4);
            }
            else if(8 < $ph && $ph < 8.25){
                $phB = (8.25-$ph)/(8.25-8);
            }
            else if((6.5 <= $ph OR $ph <= 6.65) OR (7.7 <= $ph OR $ph <= 8)){
                $phB = 1;
            }
        }
        
        if((6.25 <= $ph && $ph <= 6.5) OR (8 <= $ph && $ph <= 8.6) )
        {//jika angka diantara 6.25 - 6.5 atau diantara 8 - 8.6 maka menggunakan rumus C
            // rumus PH C
            if(($ph <= 5.25 OR 8.6 <= $ph) OR (6.5 <= $ph OR $ph <= 8)){
                $phC = 0;
            }
            else if(5.25 < $ph && $ph < 5.5){
                $phC = ($ph-5.25)/(5.5-5.25);
            }
            else if((5.5 <= $ph OR $ph <= 6) OR (8.25 <= $ph OR $ph <= 8.5)){
                $phC = 1;
            }
            else if(6 < $ph && $ph < 6.5){
                $phC = (6.5-$ph)/(6.5-6);
            }
            else if(8 < $ph && $ph < 8.25){
                $phC = ($ph-8)/(8.25-8);
            }
            else if(8.5 < $ph && $ph < 8.6){
                $phC = (8.6-$ph)/(8.6-8.5);
            }
        }
        
        if($ph <= 5.5 OR 8.5 <= $ph)
        {//jika angka diantara 5.5 maka menggunakan rumus D
            // rumus PH D
            if(5.5 < $ph && $ph < 8.5){
                $phD = 0;
            }
            else if(5.25 < $ph && $ph < 5.5){
                $phD = ($ph-5.25)/(5.5-5.25);
            }
            else if(8.5 < $ph && $ph < 8.6){
                $phD = (8.6-$ph)/(8.6-8.5);
            }
            else if($ph <= 5.25 OR 8.6 <= $ph){
                $phD = 1;
            }
        }
    //menghitung fungsi keanggotaan PH END

    //menghitung fungsi keanggotaan TDS
        if(125 <= $tds && $tds <= 325)
        {//jika angka diantara 125 - 325 maka menggunakan rumus A
            // rumus TDS A
            if($tds <= 125 OR 325 <= $tds){
                $tdsA = 0;
            }
            else if(125 < $tds && $tds < 250){
                $tdsA = ($tds-125)/(250-125);
            }
            else if(300 < $tds && $tds < 325){
                $tdsA = (325-$tds)/(325-300);
            }
            else if(250 <= $tds OR $tds <= 300){
                $tdsA = 1;
            }
        }
        
        if((0 <= $tds && $tds <= 250) OR (300 <= $tds && $tds <= 400) )
        {//jika angka diantara 0 - 250 atau diantara 300 - 400 maka menggunakan rumus B
            // rumus TDS B
            if((250 <= $tds && $tds <= 300) OR (400 <= $tds)){
                $tdsB = 0;
            }
            else if(125 < $tds && $tds < 250){
                $tdsB = (250-$tds)/(250-125);
            }
            else if(300 < $tds && $tds < 325){
                $tdsB = ($tds-300)/(325-300);
            }
            else if(350 < $tds && $tds < 400){
                $tdsB = (400-$tds)/(400-350);
            }
            else if(($tds <= 125) OR (325 <= $tds && $tds <= 350)){
                $tdsB = 1;
            }
        }
        
        if(350 <= $tds && $tds <= 475)
        {//jika angka diantara 350 - 475 maka menggunakan rumus C
            // rumus TDS C
            if($tds <= 350 && 475 <= $tds){
                $tdsC = 0;
            }
            else if(350 < $tds && $tds < 400){
                $tdsC = ($tds-350)/(400-350);
            }
            else if(400 <= $tds OR $tds <= 450){
                $tdsC = 1;
            }
            else if(450 < $tds && $tds < 475){
                $tdsC = (475-$tds)/(475-450);
            }
        }
        
        if(450 <= $tds && $tds <= 500)
        {//jika angka diantara 450 - 500 maka menggunakan rumus C
            // rumus TDS D
            if($tds <= 450){
                $tdsD = 0;
            }else if(450 < $tds && $tds < 475){
                $tdsD = ($tds-450)/(475-450);
            }else if(475 <= $tds){
                $tdsD = 1;
            }
        }

        if($tds <= 0 OR 500 <= $tds){
            $tdsD = 1;
        }
    //menghitung fungsi keanggotaan TDS END
//FUNGSI KEANGGOTAAN END
    

// deklarasi variabel untuk memanggil rule di database
    $suhu_setA = $ph_setA = $tds_setA = 'Excellent';
    $suhu_setB = $ph_setB = $tds_setB = 'Good';
    $suhu_setC = $ph_setC = $tds_setC = 'Bad';
    $suhu_setD = $ph_setD = $tds_setD = 'Very bad';
//  deklarasi variabel untuk memanggil rule di database

// RULE START 
    //SUHU A BAIK
        if(isset($suhuA) && isset($phA) && isset($tdsA)) //R1 A
            {
                //mencari alfa predikat dari nilai terkecil
                $R1=min($suhuA,$phA,$tdsA);

                //memanggil data dari database suhu, ph dan tds, untuk mencari grade
                $grade = $this->home->getdata_where($suhu_setA, $ph_setA, $tds_setA)->row();
                //menghitung nilai z
                $Z1 = $this->home->rumus_z($grade->grade,$R1);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R1', $grade);
            }
        if(isset($suhuA) && isset($phA) && isset($tdsB)) //R2 A
        {
                $R2=min($suhuA,$phA,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setA, $tds_setB)->row(); 
                $Z2 = $this->home->rumus_z($grade->grade,$R2);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R2', $grade);
            }
        if(isset($suhuA) && isset($phA) && isset($tdsC)) //R3 C
            {
                $R3=min($suhuA,$phA,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setA, $tds_setC)->row();
                $Z3 = $this->home->rumus_z($grade->grade,$R3);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R3', $grade);
            }
        if(isset($suhuA) && isset($phA) && isset($tdsD)) //R4 D
            {
                $R4=min($suhuA,$phA,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setA, $tds_setD)->row();
                $Z4 = $this->home->rumus_z($grade->grade,$R4);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R4', $grade);
            }
        if(isset($suhuA) && isset($phB) && isset($tdsA)) //R5 A
            {
                $R5=min($suhuA,$phB,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setB, $tds_setA)->row();
                $Z5 = $this->home->rumus_z($grade->grade,$R5);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R5', $grade);
            }
        if(isset($suhuA) && isset($phB) && isset($tdsB)) //R6 B
            {
                $R6=min($suhuA,$phB,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setB, $tds_setB)->row();
                $Z6 = $this->home->rumus_z($grade->grade,$R6);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R6', $grade);
            }
        if(isset($suhuA) && isset($phB) && isset($tdsC)) //R7 C
            {
                $R7=min($suhuA,$phB,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setB, $tds_setC)->row();
                $Z7 = $this->home->rumus_z($grade->grade,$R7);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R7', $grade);
            }
        if(isset($suhuA) && isset($phB) && isset($tdsD)) //R8 D
            {
                $R8=min($suhuA,$phB,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setB, $tds_setD)->row();
                $Z8 = $this->home->rumus_z($grade->grade,$R8);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R8', $grade);
            }
        if(isset($suhuA) && isset($phC) && isset($tdsA)) //R9 C
            {
                $R9=min($suhuA,$phC,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setC, $tds_setA)->row();
                $Z9 = $this->home->rumus_z($grade->grade,$R9);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R9', $grade);
            }
        if(isset($suhuA) && isset($phC) && isset($tdsB)) //R10 C
            {
                $R10=min($suhuA,$phC,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setC, $tds_setB)->row();
                $Z10 = $this->home->rumus_z($grade->grade,$R10);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R10', $grade);
            }
        if(isset($suhuA) && isset($phC) && isset($tdsC)) //R11 D
            {
                $R11=min($suhuA,$phC,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setC, $tds_setC)->row();
                $Z11 = $this->home->rumus_z($grade->grade,$R11);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R11', $grade);
            }
        if(isset($suhuA) && isset($phC) && isset($tdsD)) //R12 D
            {
                $R12=min($suhuA,$phC,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setC, $tds_setD)->row();
                $Z12 = $this->home->rumus_z($grade->grade,$R12);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R12', $grade);
            }
        if(isset($suhuA) && isset($phD) && isset($tdsA)) //R13 C
            {
                $R13=min($suhuA,$phD,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setD, $tds_setA)->row();
                echo $grade->grade;
                $Z13 = $this->home->rumus_z($grade->grade,$R13);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R13', $grade);
            }
        if(isset($suhuA) && isset($phD) && isset($tdsB)) //R14 C
            {
                $R14=min($suhuA,$phD,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setD, $tds_setB)->row();
                $Z14 = $this->home->rumus_z($grade->grade,$R14);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R14', $grade);
            }
        if(isset($suhuA) && isset($phD) && isset($tdsC)) //R15 D
            {
                $R15=min($suhuA,$phD,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setD, $tds_setC)->row();
                $Z15 = $this->home->rumus_z($grade->grade,$R15);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R15', $grade);
            }
        if(isset($suhuA) && isset($phD) && isset($tdsD)) //R16 D
            {
                $R16=min($suhuA,$phD,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setA, $ph_setD, $tds_setD)->row();
                $Z16 = $this->home->rumus_z($grade->grade,$R16);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R16', $grade);
            }
    //SUHU A BAIK END

    //SUHU B SEDANG
        if(isset($suhuB) && isset($phA) && isset($tdsA)) //R17 A
            {
                $R17=min($suhuB,$phA,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setA, $tds_setA)->row();
                $Z17 = $this->home->rumus_z($grade->grade,$R17);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R17', $grade);
            }
        if(isset($suhuB) && isset($phA) && isset($tdsB)) //R18 B
            {
                $R18=min($suhuB,$phA,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setA, $tds_setB)->row();
                $Z18 = $this->home->rumus_z($grade->grade,$R18);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R18', $grade);
            }
        if(isset($suhuB) && isset($phA) && isset($tdsC)) //R19 C
            {
                $R19=min($suhuB,$phA,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setA, $tds_setC)->row();
                $Z19 = $this->home->rumus_z($grade->grade,$R19);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R19', $grade);
            }
        if(isset($suhuB) && isset($phA) && isset($tdsD)) //R20 D
            {
                $R20=min($suhuB,$phA,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setA, $tds_setD)->row();
                $Z20 = $this->home->rumus_z($grade->grade,$R20);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R20', $grade);
            }
        if(isset($suhuB) && isset($phB) && isset($tdsA)) //R21 B
            {
                $R21=min($suhuB,$phB,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setB, $tds_setA)->row();
                $Z21 = $this->home->rumus_z($grade->grade,$R21);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R21', $grade);
            }
        if(isset($suhuB) && isset($phB) && isset($tdsB)) //R22 B
            {
                $R22=min($suhuB,$phB,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setB, $tds_setB)->row();
                $Z22 = $this->home->rumus_z($grade->grade,$R22);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R22', $grade);
            }
        if(isset($suhuB) && isset($phB) && isset($tdsC)) //R23 C
            {
                $R23=min($suhuB,$phB,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setB, $tds_setC)->row();
                $Z23 = $this->home->rumus_z($grade->grade,$R23);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R23', $grade);
            }
        if(isset($suhuB) && isset($phB) && isset($tdsD)) //R24 D
            {
                $R24=min($suhuB,$phB,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setB, $tds_setD)->row();
                $Z24 = $this->home->rumus_z($grade->grade,$R24);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R24', $grade);
            }
        if(isset($suhuB) && isset($phC) && isset($tdsA)) //R25 C
            {
                $R25=min($suhuB,$phC,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setC, $tds_setA)->row();
                $Z25 = $this->home->rumus_z($grade->grade,$R25);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R25', $grade);
            }
        if(isset($suhuB) && isset($phC) && isset($tdsB)) //R26 C
            {
                $R26=min($suhuB,$phC,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setC, $tds_setB)->row();
                $Z26 = $this->home->rumus_z($grade->grade,$R26);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R26', $grade);
            }
        if(isset($suhuB) && isset($phC) && isset($tdsC)) //R27 D
            {
                $R27=min($suhuB,$phC,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setC, $tds_setC)->row();
                $Z27 = $this->home->rumus_z($grade->grade,$R27);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R27', $grade);
            }
        if(isset($suhuB) && isset($phC) && isset($tdsD)) //R28 D
            {
                $R28=min($suhuB,$phC,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setC, $tds_setD)->row();
                $Z28 = $this->home->rumus_z($grade->grade,$R28);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R28', $grade);
            }
        if(isset($suhuB) && isset($phD) && isset($tdsA)) //R29 C
            {
                $R29=min($suhuB,$phD,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setD, $tds_setA)->row();
                $Z29 = $this->home->rumus_z($grade->grade,$R29);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R29', $grade);
            }
        if(isset($suhuB) && isset($phD) && isset($tdsB)) //R30 C
            {
                $R30=min($suhuB,$phD,$tdsB);
                
                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setD, $tds_setB)->row();
                $Z30 = $this->home->rumus_z($grade->grade,$R30);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R30', $grade);
            }
        if(isset($suhuB) && isset($phD) && isset($tdsC)) //31 D
            {
                $R31=min($suhuB,$phD,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setD, $tds_setC)->row();
                $Z31 = $this->home->rumus_z($grade->grade,$R31);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R31', $grade);
            }
        if(isset($suhuB) && isset($phD) && isset($tdsD)) //R32 D
            {
                $R32=min($suhuB,$phD,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setB, $ph_setD, $tds_setD)->row();
                $Z32 = $this->home->rumus_z($grade->grade,$R32);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R32', $grade);
            }
    //SUHU B SEDANG END

	//SUHU C BURUK
		if(isset($suhuC) && isset($phA) && isset($tdsA)) //R33 C
			{
				$R33=min($suhuC,$phA,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setA, $tds_setA)->row();
				$Z33 = $this->home->rumus_z($grade->grade,$R33);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R33', $grade);
			}
		if(isset($suhuC) && isset($phA) && isset($tdsB)) //R34 C
			{
				$R34=min($suhuC,$phA,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setA, $tds_setB)->row();
				$Z34 = $this->home->rumus_z($grade->grade,$R34);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R34', $grade);
			}
		if(isset($suhuC) && isset($phA) && isset($tdsC)) //R35 C
			{
				$R35=min($suhuC,$phA,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setA, $tds_setC)->row();
				$Z35 = $this->home->rumus_z($grade->grade,$R35);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R35', $grade);
			}
		if(isset($suhuC) && isset($phA) && isset($tdsD)) //R36 D
			{
				$R36=min($suhuC,$phA,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setA, $tds_setD)->row();
				$Z36 = $this->home->rumus_z($grade->grade,$R36);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R36', $grade);
			}
		if(isset($suhuC) && isset($phB) && isset($tdsA)) //R37 C
			{
				$R37=min($suhuC,$phB,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setB, $tds_setA)->row();
				$Z37 = $this->home->rumus_z($grade->grade,$R37);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R37', $grade);
			}
		if(isset($suhuC) && isset($phB) && isset($tdsB)) //R38 C
			{
				$R38=min($suhuC,$phB,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setB, $tds_setB)->row();
				$Z38 = $this->home->rumus_z($grade->grade,$R38);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R38', $grade);
			}
		if(isset($suhuC) && isset($phB) && isset($tdsC)) //R39 D
			{
				$R39=min($suhuC,$phB,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setB, $tds_setC)->row();
				$Z39 = $this->home->rumus_z($grade->grade,$R39);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R39', $grade);
			}
		if(isset($suhuC) && isset($phB) && isset($tdsD)) //R40 D
			{
				$R40=min($suhuC,$phB,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setB, $tds_setD)->row();
				$Z40 = $this->home->rumus_z($grade->grade,$R40);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R40', $grade);
			}
		if(isset($suhuC) && isset($phC) && isset($tdsA)) //R41 C
			{
				$R41=min($suhuC,$phC,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setC, $tds_setA)->row();
				$Z41 = $this->home->rumus_z($grade->grade,$R41);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R41', $grade);
			}
		if(isset($suhuC) && isset($phC) && isset($tdsB)) //R42 D
			{
				$R42=min($suhuC,$phC,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setC, $tds_setB)->row();
				$Z42 = $this->home->rumus_z($grade->grade,$R42);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R42', $grade);
			}
		if(isset($suhuC) && isset($phC) && isset($tdsC)) //R43 D
			{
				$R43=min($suhuC,$phC,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setC, $tds_setC)->row();
				$Z43 = $this->home->rumus_z($grade->grade,$R43);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R43', $grade);
			}
		if(isset($suhuC) && isset($phC) && isset($tdsD)) //R44 D
			{
				$R44=min($suhuC,$phC,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setC, $tds_setD)->row();
				$Z44 = $this->home->rumus_z($grade->grade,$R44);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R44', $grade);
			}
		if(isset($suhuC) && isset($phD) && isset($tdsA)) //R45 C
			{
				$R45=min($suhuC,$phD,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setD, $tds_setA)->row();
				$Z45 = $this->home->rumus_z($grade->grade,$R45);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R45', $grade);
			}
		if(isset($suhuC) && isset($phD) && isset($tdsB)) //R46 D
			{
				$R46=min($suhuC,$phD,$tdsB);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setD, $tds_setB)->row();
				$Z46 = $this->home->rumus_z($grade->grade,$R46);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R46', $grade);
			}
		if(isset($suhuC) && isset($phD) && isset($tdsC)) //47 D
			{
				$R47=min($suhuC,$phD,$tdsC);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setD, $tds_setC)->row();
				$Z47 = $this->home->rumus_z($grade->grade,$R47);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R47', $grade);
			}
		if(isset($suhuC) && isset($phD) && isset($tdsD)) //R48 D
			{
				$R48=min($suhuC,$phD,$tdsD);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setC, $ph_setD, $tds_setD)->row()->grade;
				$Z48 = $this->home->rumus_z($grade,$R48);
			}
	//SUHU C BURUK END

	//SUHU D SANGAT BURUK
		if(isset($suhuD) && isset($phA) && isset($tdsA)) //R49 B
		{
                $R49=min($suhuD,$phA,$tdsA);

                //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setA, $tds_setA)->row();
                $Z49 = $this->home->rumus_z($grade->grade,$R49);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R49', $grade);
		}
		if(isset($suhuD) && isset($phA) && isset($tdsB)) //R50 C
			{
				$R50=min($suhuD,$phA,$tdsB);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setA, $tds_setB)->row();
				$Z50 = $this->home->rumus_z($grade->grade,$R50);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R50', $grade);
			}
		if(isset($suhuD) && isset($phA) && isset($tdsC)) //R51 C
			{
				$R51=min($suhuD,$phA,$tdsC);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setA, $tds_setC)->row();
				$Z51 = $this->home->rumus_z($grade->grade,$R51);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R51', $grade);
			}
		if(isset($suhuD) && isset($phA) && isset($tdsD)) //R52 C
			{
				$R52=min($suhuD,$phA,$tdsD);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setA, $tds_setD)->row();
				$Z52 = $this->home->rumus_z($grade->grade,$R52);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R52', $grade);
			}
		if(isset($suhuD) && isset($phB) && isset($tdsA)) //R53 C
			{
				$R53=min($suhuD,$phB,$tdsA);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setB, $tds_setA)->row();
				$Z53 = $this->home->rumus_z($grade->grade,$R53);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R53', $grade);
			}
		if(isset($suhuD) && isset($phB) && isset($tdsB)) //R54 C
			{
				$R54=min($suhuD,$phB,$tdsB);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setB, $tds_setB)->row();
				$Z54 = $this->home->rumus_z($grade->grade,$R54);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R54', $grade);
			}
		if(isset($suhuD) && isset($phB) && isset($tdsC)) //R55 D
			{
				$R55=min($suhuD,$phB,$tdsC);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setB, $tds_setC)->row();
				$Z55 = $this->home->rumus_z($grade->grade,$R55);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R55', $grade);
			}
		if(isset($suhuD) && isset($phB) && isset($tdsD)) //R56 D
			{
				$R56=min($suhuD,$phB,$tdsD);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setB, $tds_setD)->row();
				$Z56 = $this->home->rumus_z($grade->grade,$R56);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R56', $grade);
			}
		if(isset($suhuD) && isset($phC) && isset($tdsA)) //R57 C
			{
				$R57=min($suhuD,$phC,$tdsA);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setC, $tds_setA)->row();
				$Z57 = $this->home->rumus_z($grade->grade,$R57);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R57', $grade);
			}
		if(isset($suhuD) && isset($phC) && isset($tdsB)) //R58 C
			{
				$R58=min($suhuD,$phC,$tdsB);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setC, $tds_setB)->row();
				$Z58 = $this->home->rumus_z($grade->grade,$R58);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R58', $grade);
			}
		if(isset($suhuD) && isset($phC) && isset($tdsC)) //R59 D
			{
				$R59=min($suhuD,$phC,$tdsC);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setC, $tds_setC)->row();
				$Z59 = $this->home->rumus_z($grade->grade,$R59);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R59', $grade);
			}
		if(isset($suhuD) && isset($phC) && isset($tdsD)) //R60 D
			{
				$R60=min($suhuD,$phC,$tdsD);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setC, $tds_setD)->row();
				$Z60 = $this->home->rumus_z($grade->grade,$R60);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R60', $grade);
			}
		if(isset($suhuD) && isset($phD) && isset($tdsA)) //R61 C
			{
				$R61=min($suhuD,$phD,$tdsA);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setD, $tds_setA)->row();
				$Z61 = $this->home->rumus_z($grade->grade,$R61);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R61', $grade);
			}
		if(isset($suhuD) && isset($phD) && isset($tdsB)) //R62 D
			{
				$R62=min($suhuD,$phD,$tdsB);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setD, $tds_setB)->row();
				$Z62 = $this->home->rumus_z($grade->grade,$R62);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R62', $grade);
			}
		if(isset($suhuD) && isset($phD) && isset($tdsC)) //R63 D
			{
				$R63=min($suhuD,$phD,$tdsC);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setD, $tds_setC)->row();
				$Z63 = $this->home->rumus_z($grade->grade,$R63);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R63', $grade);
			}
		if(isset($suhuD) && isset($phD) && isset($tdsD)) //R64 D
			{
				$R64=min($suhuD,$phD,$tdsD);

                 //memanggil data dari database suhu, ph dan tds
                $grade = $this->home->getdata_where($suhu_setD, $ph_setD, $tds_setD)->row();
				$Z64 = $this->home->rumus_z($grade->grade,$R64);

                //memasukkan data rule ke session untuk ditampilkan ke view
                $this->session->set_userdata('Data_R64', $grade);
			}
	//SUHU D SANGAT BURUK END
// RULE START END   

//HASIL Z
	$Ex //menam[ilkan hasil alfa predikat]
	=($R1 * $Z1)+($R2 * $Z2)+($R3 * $Z3)+($R4 * $Z4)
	+($R5 * $Z5)+($R6 * $Z6)+($R7 * $Z7)+($R8 * $Z8)
	+($R9 * $Z9)+($R10 * $Z10)+($R11 * $Z11)+($R12 * $Z12)
	+($R13 * $Z13)+($R14 * $Z14)+($R15 * $Z15)+($R16 * $Z16)

	+($R17 * $Z17)+($R18 * $Z18)+($R19 * $Z19)+($R20 * $Z20)
	+($R21 * $Z21)+($R22 * $Z22)+($R23 * $Z23)+($R24 * $Z24)
	+($R25 * $Z25)+($R26 * $Z26)+($R27 * $Z27)+($R28 * $Z28)
	+($R29 * $Z29)+($R30 * $Z30)+($R31 * $Z31)+($R32 * $Z32)
	
	+($R33 * $Z33)+($R34 * $Z34)+($R35 * $Z35)+($R36 * $Z36)
	+($R37 * $Z37)+($R38 * $Z38)+($R39 * $Z39)+($R40 * $Z40)
	+($R41 * $Z41)+($R42 * $Z42)+($R43 * $Z43)+($R44 * $Z44)
	+($R45 * $Z45)+($R46 * $Z46)+($R47 * $Z47)+($R48 * $Z48)
	
	+($R49 * $Z49)+($R50 * $Z50)+($R51 * $Z51)+($R52 * $Z52)
	+($R53 * $Z53)+($R54 * $Z54)+($R55 * $Z55)+($R56 * $Z56)
	+($R57 * $Z57)+($R58 * $Z58)+($R59 * $Z59)+($R60 * $Z60)
	+($R61 * $Z61)+($R62 * $Z62)+($R63 * $Z63)+($R64 * $Z64);

    // echo '<br>';

    $Er //menampilkan hasil jumlah alfa predikat
	=$R1+$R2+$R3+$R4+$R5+$R6+$R7+$R8+$R9+$R10+
    $R11+$R12+$R13+$R14+$R15+$R16+$R17+$R18+$R19+$R20+
    $R21+$R22+$R23+$R24+$R25+$R26+$R27+$R28+$R29+$R30+
    $R31+$R32+$R33+$R34+$R35+$R36+$R37+$R38+$R39+$R40+
    $R41+$R42+$R43+$R44+$R45+$R46+$R47+$R48+$R49+$R50+
    $R51+$R52+$R53+$R54+$R55+$R56+$R57+$R58+$R59+$R60+
    $R61+$R62+$R63+$R64;

    $hasil = substr($Ex/$Er, 0, 6); //menampilkan hasil hitungan

	if(0 <= $hasil && $hasil <= 150 )
	{
		// echo 'Grade A';
        $grade_hasil = 'A';
	}else if(151 <= $hasil && $hasil <= 250 )
	{
		// echo 'Grade B';
        $grade_hasil = 'B';
	}else if(251 <= $hasil && $hasil <= 350 )
	{
		// echo 'Grade C';
        $grade_hasil = 'C';
	}else if(351 <= $hasil && $hasil <= 500 )
	{
		// echo 'Grade D';
        $grade_hasil = 'D';
	}else
	{
		// echo 'Grade D, tidak terdefinisi';
        $grade_hasil = 'D';
	}

	// echo '<br>';
//HASIL Z END

//tampilkan hasil hitungan awal
    // echo '<br>';
    // if(isset($suhuA)){echo 'suhuA ='.$suhuA.'<br>';}
    // if(isset($suhuB)){echo 'suhuB ='.$suhuB.'<br>';}
    // if(isset($suhuC)){echo 'suhuC ='.$suhuC.'<br>';}
    // if(isset($suhuD)){echo 'suhuD ='.$suhuD;}
    // echo '<br>';

    // if(isset($phA)){echo 'phA ='.$phA.'<br>';}
    // if(isset($phB)){echo 'phB ='.$phB.'<br>';}
    // if(isset($phC)){echo 'phC ='.$phC.'<br>';}
    // if(isset($phD)){echo 'phD ='.$phD;}
    // echo '<br>';

    // if(isset($tdsA)){echo 'tdsA ='.$tdsA.'<br>';}
    // if(isset($tdsB)){echo 'tdsB ='.$tdsB.'<br>';}
    // if(isset($tdsC)){echo 'tdsC ='.$tdsC.'<br>';}
    // if(isset($tdsD)){echo 'tdsD ='.$tdsD;}
    // echo '<br>';
//tampilkan hasil hitungan awal END

//tampil hasil hitung rule 
    
	// if(isset($R1)){echo 'R1 ='.$R1.'  Z ='.$Z1.'<br>';}
	// if(isset($R2)){echo 'R2 ='.$R2.'  Z ='.$Z2.'<br>';}
    // if(isset($R3)){echo 'R3 ='.$R3.'  Z ='.$Z3.'<br>';}
    // if(isset($R4)){echo 'R4 ='.$R4.'  Z ='.$Z4.'<br>';}
    // if(isset($R5)){echo 'R5 ='.$R5.'  Z ='.$Z5.'<br>';}
    // if(isset($R6)){echo 'R6 ='.$R6.'  Z ='.$Z6.'<br>';}
    // if(isset($R7)){echo 'R7 ='.$R7.'  Z ='.$Z7.'<br>';}
    // if(isset($R8)){echo 'R8 ='.$R8.'  Z ='.$Z8.'<br>';}
    // if(isset($R9)){echo 'R9 ='.$R9.'  Z ='.$Z9.'<br>';}

	// if(isset($R10)){echo 'R10 ='.$R10.'  Z ='.$Z10.'<br>';}
    // if(isset($R11)){echo 'R11 ='.$R11.'  Z ='.$Z11.'<br>';}
    // if(isset($R12)){echo 'R12 ='.$R12.'  Z ='.$Z12.'<br>';}
    // if(isset($R13)){echo 'R13 ='.$R13.'  Z ='.$Z13.'<br>';}
    // if(isset($R14)){echo 'R14 ='.$R14.'  Z ='.$Z14.'<br>';}
    // if(isset($R15)){echo 'R15 ='.$R15.'  Z ='.$Z15.'<br>';}
    // if(isset($R16)){echo 'R16 ='.$R16.'  Z ='.$Z16.'<br>';}
    // if(isset($R17)){echo 'R17 ='.$R17.'  Z ='.$Z17.'<br>';}
    // if(isset($R18)){echo 'R18 ='.$R18.'  Z ='.$Z18.'<br>';}
    // if(isset($R19)){echo 'R19 ='.$R19.'  Z ='.$Z19.'<br>';}

    // if(isset($R20)){echo 'R20 ='.$R20.'  Z ='.$Z20.'<br>';}
    // if(isset($R21)){echo 'R21 ='.$R21.'  Z ='.$Z21.'<br>';}
    // if(isset($R22)){echo 'R22 ='.$R22.'  Z ='.$Z22.'<br>';}
    // if(isset($R23)){echo 'R23 ='.$R23.'  Z ='.$Z23.'<br>';}
    // if(isset($R24)){echo 'R24 ='.$R24.'  Z ='.$Z24.'<br>';}
    // if(isset($R25)){echo 'R25 ='.$R25.'  Z ='.$Z25.'<br>';}
    // if(isset($R26)){echo 'R26 ='.$R26.'  Z ='.$Z26.'<br>';}
    // if(isset($R27)){echo 'R27 ='.$R27.'  Z ='.$Z27.'<br>';}
    // if(isset($R28)){echo 'R28 ='.$R28.'  Z ='.$Z28.'<br>';}
    // if(isset($R29)){echo 'R29 ='.$R29.'  Z ='.$Z29.'<br>';}

    // if(isset($R30)){echo 'R30 ='.$R30.'  Z ='.$Z30.'<br>';}
    // if(isset($R31)){echo 'R31 ='.$R31.'  Z ='.$Z31.'<br>';}
    // if(isset($R32)){echo 'R32 ='.$R32.'  Z ='.$Z32.'<br>';}
    // if(isset($R33)){echo 'R33 ='.$R33.'  Z ='.$Z33.'<br>';}
    // if(isset($R34)){echo 'R34 ='.$R34.'  Z ='.$Z34.'<br>';}
    // if(isset($R35)){echo 'R35 ='.$R35.'  Z ='.$Z35.'<br>';}
    // if(isset($R36)){echo 'R36 ='.$R36.'  Z ='.$Z36.'<br>';}
    // if(isset($R37)){echo 'R37 ='.$R37.'  Z ='.$Z37.'<br>';}
    // if(isset($R38)){echo 'R38 ='.$R38.'  Z ='.$Z38.'<br>';}
    // if(isset($R39)){echo 'R39 ='.$R39.'  Z ='.$Z39.'<br>';}

    // if(isset($R40)){echo 'R40 ='.$R40.'  Z ='.$Z40.'<br>';}
    // if(isset($R41)){echo 'R41 ='.$R41.'  Z ='.$Z41.'<br>';}
    // if(isset($R42)){echo 'R42 ='.$R42.'  Z ='.$Z42.'<br>';}
    // if(isset($R43)){echo 'R43 ='.$R43.'  Z ='.$Z43.'<br>';}
    // if(isset($R44)){echo 'R44 ='.$R44.'  Z ='.$Z44.'<br>';}
    // if(isset($R45)){echo 'R45 ='.$R45.'  Z ='.$Z45.'<br>';}
    // if(isset($R46)){echo 'R46 ='.$R46.'  Z ='.$Z46.'<br>';}
    // if(isset($R47)){echo 'R47 ='.$R47.'  Z ='.$Z47.'<br>';}
    // if(isset($R48)){echo 'R48 ='.$R48.'  Z ='.$Z48.'<br>';}
    // if(isset($R49)){echo 'R49 ='.$R49.'  Z ='.$Z49.'<br>';}

    // if(isset($R50)){echo 'R50 ='.$R50.'  Z ='.$Z50.'<br>';}
    // if(isset($R51)){echo 'R51 ='.$R51.'  Z ='.$Z51.'<br>';}
    // if(isset($R52)){echo 'R52 ='.$R52.'  Z ='.$Z52.'<br>';}
    // if(isset($R53)){echo 'R53 ='.$R53.'  Z ='.$Z53.'<br>';}
    // if(isset($R54)){echo 'R54 ='.$R54.'  Z ='.$Z54.'<br>';}
    // if(isset($R55)){echo 'R55 ='.$R55.'  Z ='.$Z55.'<br>';}
    // if(isset($R56)){echo 'R56 ='.$R56.'  Z ='.$Z56.'<br>';}
    // if(isset($R57)){echo 'R57 ='.$R57.'  Z ='.$Z57.'<br>';}
    // if(isset($R58)){echo 'R58 ='.$R58.'  Z ='.$Z58.'<br>';}
    // if(isset($R59)){echo 'R59 ='.$R59.'  Z ='.$Z59.'<br>';}

    // if(isset($R60)){echo 'R60 ='.$R60.'  Z ='.$Z60.'<br>';}
    // if(isset($R61)){echo 'R61 ='.$R61.'  Z ='.$Z61.'<br>';}
    // if(isset($R62)){echo 'R62 ='.$R62.'  Z ='.$Z62.'<br>';}
    // if(isset($R63)){echo 'R63 ='.$R63.'  Z ='.$Z63.'<br>';}
    // if(isset($R64)){echo 'R64 ='.$R64.'  Z ='.$Z64.'<br>';}

//tampil hasil hitung rule END

// contoh tampilan di view nanti
    // echo '<br>';
    // $dr1 = $_SESSION['Data_R1'];
    // echo $dr1->id_rule;
    // echo $dr1->rule;
    // echo $dr1->suhu_fuzzyset;
    // echo $dr1->ph_fuzzyset;
    // echo $dr1->tds_fuzzyset;

    // echo '<br>';
    // $dr5 = $_SESSION['Data_R5'];
    // echo $dr5->id_rule;
    // echo $dr5->rule;
    // echo $dr5->suhu_fuzzyset;
    // echo $dr5->ph_fuzzyset;
    // echo $dr5->tds_fuzzyset;
// contoh tampilan di view nanti END


// input data ke database
    $data = array(
        'suhu'              => $suhu,
        'ph'                => $ph,
        'tds'               => $tds,
        'hasil_perhitungan' => $hasil,
        'grade'             => $grade_hasil,
        'tanggal'           => date('Y-m-d')
    );

    $this->home->input_db($data);
// input data ke database END

//hitungan presentase
    if($hasil < 0 OR 500 < $hasil){
        $presentase = 0;
    }else{
        $presentase = substr(((500-$hasil)*100)/500, 0,4);
    }
//hitungan presentase END

    $sesi = array(
        'suhu' => $suhu,
        'ph' => $ph,
        'tds' => $tds,
        'presentase' => $presentase,
        'hasil' => $hasil,
        'grade' => $grade_hasil
    );
    $this->session->set_userdata($sesi);
    // $this->index();
    redirect('user/C_input');
    }

    public function reset(){
        session_destroy();
        redirect('user/C_input');
    }
}
