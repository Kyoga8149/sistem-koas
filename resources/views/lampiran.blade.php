<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LAMPIRAN SURAT PENGANTAR KOAS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: Arial; height: 1123px; width: 794px; margin: auto;
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
        <P class="lampiran"> LAMPIRAN </P>
        
        <!-- KOP SURAT -->
        <div>
            <center>
            <p>KELOMPOK KEPANITERAAN KLINIK MADYA DOKTER MUDA</p>
            <p>FAKULTAS KEDOKTERAN DAN ILMU KESEHATAN UNWAR</p>
            <p>DI RSUD SANJIWANI GIANYAR</p>
            </center>
        </div>

        <!-- Detail Surat -->
        
        <div style="padding-top: 35px; padding-bottom: 25px; margin-left: 85px" class="col-3">
            <table>
                <tr>
                    <td>Bagian</td>
                    <td class="space">:</td>
                    <td>{{$station}}</td>
                </tr>
                <tr>
                    <td>Kelompok</td>
                    <td class="space">:</td>
                    <td>{{$group}}</td>
                </tr>
                <tr>
                    <td>Mulai</td>
                    <td class="space">:</td>
                    <td>start s/d end</td>
                </tr>
                <tr>
                    <td>Selama</td>
                    <td class="space">:</td>
                    <td> Minggu </td>
                </tr>
            </table>
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
