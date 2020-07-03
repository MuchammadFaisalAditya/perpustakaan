<?php 
$connect = mysqli_connect("localhost","root","","perpustakaan")

$Data=mysqli_query($connect, "SELECT b.id_buku, b.judul, b.tahun_terbit, p.penulis, e.penerbit, j.jenis_buku from buku as b 
              inner join penulis as p on b.id_penulis=p.id_penulis
              inner join penerbit as e on b.id_penerbit=e.id_penerbit
              inner join jenis_buku as j on b.id_jenis_buku=j.id_jenis_buku ORDER BY id_buku");
            $b = array();
             $No=1;
            while($a=mysqli_fetch_array($Data)) {
            array_push($b, $a)
            }

            $judul = "Data Buku perpustakaan";
            $header = array(
              array("label"=>"ID Buku", "length"=>30, "align"=>"L"),
              array("label"=>"Judul", "length"=>50, "align"=>"L"),
              array("label"=>"Tahun terbit", "length"=>30, "align"=>"L"),
              array("label"=>"Penulis", "length"=>30, "align"=>"L"),
              array("label"=>"Penerbit", "length"=>30, "align"=>"L"),
              array("label"=>"Jenis Buku", "length"=>30, "align"=>"L"),
            );
            require_once ("fpdf/fpdf.php");
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B','14'); 
            $pdf->Cell(0,20,$judul,'0',1,'C');
            $pdf->SetFont('Arial','','10');
            $pdf->SetFillColor(139, 69, 19);
            $pdf->SetTextColor(255);
            $pdf->SetDrawColor(222, 184, 135);
            foreach ($header as $kolon) {
              $pdf->Cell($kolom['length'], 5, $kolom['label'], 1,'0',$kolom['align'], $fill);
            }
            $pdf->Ln();

            $pdf->SetFillColor(245, 222, 179);
            $pdf->SetTextColor(0);
            $pdf->SetFont('');
            $fill=false;
            foreach ($b as $baris) {
              $i = 0;
              foreach ($baris as $Cell) {
                $pdf->Cell($header[$i]['length'], 5, $Cell,  1,'0',$kolom['align'], $fill);
                $i++;
              }
              $fill = !$fill;
              $pdf->Ln;
            }
            $pdf->Output();
            ?>
              