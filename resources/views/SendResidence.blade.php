<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Surat Pengantar Pengiriman Residen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: Arial; width: 794px; margin: auto;
            }
            img.resize{
                width: 100px; height: auto;
            }
            p {
                margin:0px; padding:2px;
            }
            p.lampiran {
                margin-top:40px; margin-left: 85px; padding-bottom:25px;
            }
            table.studenttab {
                border-collapse: collapse; border: 1px solid; padding: 5px; width: 75%;
                margin-left: auto; margin-right:auto; counter-reset: coloumnNumber;
            }
            table.studenttab td,  table.studenttab th {
                border-collapse: collapse; border: 1px solid; padding: 10px;
            }
            td.space {
                padding-left: 25px; padding-right:25px;
            }   
            td.space2 {
                padding-left: 150px; padding-right:150px;
            } 
            td.num::before{
                counter-increment: coloumnNumber; content: counter(coloumnNumber);
            }
            div.col-4{
                margin-left: 300px;
            }
        </style>
    </head>

    <body>
        <!-- HEADER -->
        <P class="lampiran">  </P>

        <!--KOP SURAT -->
        <div>
            <table style="margin-left: auto; margin-right:auto;">
                <tr>
                    <td>
                        <img class="resize" src="https://rsudsanjiwani.gianyarkab.go.id/wp-content/uploads/2020/07/logo-sanjiwani-transparan.png">
                    </td>
                    <td>
                        <center> 
                        <p>RUMAH SAKIT UMUM DAERAH</p>
                        <p>SANJIWANI GIANYAR</p>
                        <p>FAKULTAS KEDOKTERAN DAN ILMU</p>
                        <p>KESEHATAN UNIVERSITAS</p>
                        <p>WARMADEWA</p>
                        </center>
                    </td>
                    <td>
                        <img style= "padding-left: 10px" class="resize" src="data:image/jpeg;base64,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">
                    </td>
                </tr>
            </table>
        </div>
        <hr>
             
        <!-- Detail Surat -->
        <div style="margin-left: 85px">
            <table>
                <tr>
                    <td>Nomor</td>
                    <td class="space">:</td>
                    <td>*xxx/xxxx/xxx*</td>
                    <td class="space2"></td>
                    <td>*Gianyar*</td>
                    <td>,</td>
                    <td>*Tanggal*</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Lampiran</td>
                    <td class="space">:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td class="space">:</td>
                    <td>*Pengiriman Dokter Muda KKM*</td>
                </tr>
            </table>
        </div>

        <!-- Kata Pengantar -->
        <div style="margin-left: 85px; padding-top: 20px">
            <table>
                <tr><td></td><td>Kepada</td></tr>
                <tr><td style="padding-left: 25px; padding-right: 25px">yth</td><td>Direktur RSD mangusada</td></tr>
                <tr><td></td><td>di-</td></tr>
                <tr><td></td><td style="text-align: center">*Badung*</td></tr>
            </table>
        </div>

        <!-- Kata Pembuka -->
        <div style="margin-top: 20px; margin-bottom: 30px; width: 75%; margin-left: auto; margin-right:auto; text-align: justify">
            <p>Dengan Hormat<p>
            <p style="text-indent: 50px;">
                Bersama dengan surat ini kami kirimkan nama Dokter Muda yang akan menjalani
                Kegiatan KKM (Kepaniteraan Klinik Madya) ke Bagian *Penyakit Dalam* 
                *RSD Mangusada Badung* selama *2minggu* terhitung dari tanggal *7 Juli 2020* 
                s/d *30 Juli 2020* siklus dilakukan secara Full Offline, sebagai berikut 
                nama-nama Dokter Muda yang menjalani KKM yaitu:
            </p>
        </div>

        <!-- Detail Peserta -->
        <div>
        <table class="studenttab">
            <thead>
                <tr style="font-weight: bold">
                    <th> NO  </th>
                    <th> Nama </th>
                    <th> NIM </th>
                </tr>
            </thead>
            <tbody>
            @foreach($student as $student)
                <tr>
                    <td style="text-align:center" class="num"></td>
                    <td> {{$student['name']}} </td>
                    <td> {{$student['nim']}} </td>
                </tr>                   
            @endforeach
            </tbody>
        </table>
        </div>

        <!-- Detail Tugas -->
        <div style="margin-top: 20px; margin-bottom: 30px; width: 75%; margin-left: auto; margin-right:auto; text-align: justify">
            <p>
                Selama menjalani KKM di *RSD Mangusada, adapun tugas ilmiah yang dilaksanakan yaitu:
            </p>
            <p>1. Setiap Dokter Muda wajib mengikuti laporan pagi</p>
            <p>2. Setiap Dokter Muda mendapat laporan kasus (1x)</p>
            <p>3. Setiap Dokter Muda mendapat Refleksi kasus (1x)</p>
            <p>4. Setiap Dokter Muda mendapat Tutorial klinik secara berkelompok (1x)</p>
            <p>5. Setiap Dokter Muda mendapat Mini-Cex (1x)</p>
            <p>6. Setiap Dokter Muda mendapat Bimbingan Bed Side Teaching</p>
            <p>7. Setiap Dokter Muda mengisi kompetensi yang disesuaikan dengan Buku Panduan Kepaniteraan atau Buku log</p>
            <p style="text-indent: 20px; margin-top: 15px">
                Demikian kami sampaikan atas perhatian dan kerjasamanya serta bimbingan nya kami ucapkan terimakasih
            </p>
        </div>
        <div>
            
        </div>
        <!-- Tanda Tangan Ketua Prodi? -->
        <div class="row">
            <div class="col-8"></div>
            <div style="padding-top: 35px; padding-bottom: 25px">
            <div class="col-4">
                 <div>
                    <center>
                        <p>FAKULTAS KEDOKTERAN DAN ILMU KESEHATAN</p>
                        <p>Universitas Warmadewa</h4>
                        <p>Ka.Komkordik FKIK RSUD Sanjiwani Gianyar</p>
                    </center>
                 </div>
            </div>
            </div>
        </div>
        <div style="padding-top: 45px">
            <div class="col-4">
                <div>
                    <center>
                        <p style="text-decoration: underline">dr. Made Dwi Yoga Bharata, Sp. B KBD</p>
                        <p>NIP: 1967092120060410002</p>
                    <center>
                </div>
            </div>
        </div>

    </body>
</html>
