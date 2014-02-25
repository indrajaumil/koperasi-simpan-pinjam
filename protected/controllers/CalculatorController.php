<?php

class CalculatorController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	 public $layout='//layouts/clean';
	public function actions()
	{
		return array(
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionKurs()
	{
		$this->render('kurs');
	}
	
	public function actionHitung()
	{
		extract($_POST);
		if($jenis_bunga==1)
		{
			$total=str_replace('Rp. ', '', $total);
			$total=str_replace(',', '', $total);
			$totalAngsuran=($total*(($interest/100)/12))/(1-1/pow((1+($interest/100)/12), $months));
			$content='<table cellpadding="1" cellspacing="1" align="center">';
			$content.='<tr class="header">
							<td>Bulan</td>
							<td>Total Angsuran</td>
							<td>Angsuran Pokok</td>
							<td>Bunga</td>
							<td>Sisa Saldo</td>
						</tr>';
			$sisaSaldo=$total;
			$sum['totalAngsuran']=0;
			$sum['angsuranPokok']=0;
			$sum['bunga']=0;
			for($i=0; $i<$months; $i++)
			{
				$bungaAnuitas=$sisaSaldo * (($interest/100)/12);
				$angsuranPokok=$this->roundNearestHundredDown($totalAngsuran)-$this->roundNearestHundredDown($bungaAnuitas);
				$angsuranPokok = ($i==($months-1)) ? $sisaSaldo : $angsuranPokok;
				$sisaSaldo= ($i==($months-1)) ? 0:$sisaSaldo-$angsuranPokok;
				$totalAngsuran2 = ($i==($months-1)) ? $this->roundNearestHundredUp($angsuranPokok) + $this->roundNearestHundredUp($bungaAnuitas): $totalAngsuran;
				$evenRow=(($i+1)%2==0)?'even':'';
				$content.='<tr class="rowdata '.$evenRow.'">';
				$content.='<td>Bulan ke-'.($i+1).'</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($totalAngsuran2), 0, ',', '.').'&nbsp;,-</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredDown($angsuranPokok), 0, ',', '.').'&nbsp;,-</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($bungaAnuitas), 0, ',', '.').'&nbsp;,-</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($sisaSaldo), 0, ',', '.').'&nbsp;,-</td>';
				$content.='</tr>';
				$sum['totalAngsuran']+=$totalAngsuran;
				$sum['angsuranPokok']+=$angsuranPokok;
				$sum['bunga']+=$bungaAnuitas;
			}
			$content.='<tr class="footer">';
			$content.='<td>Jumlah</td>';
			$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($sum['totalAngsuran']), 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">Rp. '.number_format($total, 0, ',', '.').'&nbsp;,-</td>';
			//$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredDown($sum['angsuranPokok']), 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredDown($sum['bunga']), 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">&nbsp;</td>';
			$content.='</tr>';
			$content.='</table>';
		}
		else if($jenis_bunga==2)
		{
			$total=str_replace('Rp. ', '', $total);
			$total=str_replace(',', '', $total);
			$bunga=(($interest/12)/100)*$total;
			
			$bunga = ($total * ( ($interest / 100) /12) ) * $months;
			$bunga = $bunga / $months;
			$angsuran=$total/$months;
			$saldoAkhir=$total;
			$totalAngsuranX=$bunga+$angsuran;
			$totalAngsuran=$this->roundNearestHundredUp($bunga)+$this->roundNearestHundredUp($angsuran);
			$content='<table cellpadding="1" cellspacing="1" align="center">';
			$content.='<tr class="header">
							<td>Bulan</td>
							<td>Total Angsuran</td>
							<td>Angsuran</td>
							<td>Bunga</td>
							<td>Sisa Saldo</td>
						</tr>';
			for($i=0; $i<$months; $i++)
			{
				$evenRow=(($i+1)%2==0)?'even':'';
				$angsuran = $saldoAkhir<$angsuran ? $saldoAkhir : $angsuran; 
				$saldoAkhir= ($i==($months-1)) ? 0:$this->roundNearestHundredUp($saldoAkhir)-$this->roundNearestHundredUp($angsuran);
				$totalAngsuran = $angsuran + $bunga;
				$jumlahSeluruhAngsuran = $jumlahSeluruhAngsuran + $totalAngsuran;
				//$angsuran = ($i==($months-2)) ? $saldoAkhir : $angsuran;
				
				//$saldoAkhir=$this->roundNearestHundredUp($saldoAkhir)-$this->roundNearestHundredUp($angsuran);
				$content.='<tr class="rowdata '.$evenRow.'">';
				$content.='<td>Bulan ke-'.($i+1).'</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($totalAngsuran), 0, ',', '.').'&nbsp;,-</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($angsuran), 0, ',', '.').'&nbsp;,-</td>';
				$content.='<td align="right">Rp. '.number_format($this->roundNearestHundredUp($bunga), 0, ',', '.').'&nbsp;,-</td>';				
				$content.='<td align="right">Rp. '.number_format($saldoAkhir, 0, ',', '.').'&nbsp;,-</td>';
				$content.='</tr>';
			}
			//$jumlahSeluruhAngsuran = $this->roundNearestHundredUp($jumlahSeluruhAngsuran);
			$jumlahAngsuran = $angsuran*$months;
			$jumlahJasa = $bunga*$months;
			$jumlahSeluruhAngsuran1 = $totalAngsuran*$months;
			$jumlahSeluruhAngsuran2 = $jumlahAngsuran+$jumlahJasa; 
			$jumlahSeluruhAngsuran = ($jumlahSeluruhAngsuran2<$jumlahSeluruhAngsuran1) ? $jumlahSeluruhAngsuran2:$jumlahSeluruhAngsuran1;
			$jumlahSeluruhAngsuran = $total + $jumlahJasa;
			
			$content.='<tr class="footer">';
			$content.='<td>Jumlah</td>';
			$content.='<td align="right">Rp. '.number_format($jumlahSeluruhAngsuran, 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">Rp. '.number_format($total, 0, ',', '.').'&nbsp;,-</td>';
			//$content.='<td align="right">Rp. '.number_format($jumlahAngsuran, 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">Rp. '.number_format($jumlahJasa, 0, ',', '.').'&nbsp;,-</td>';
			$content.='<td align="right">&nbsp;</td>';
			$content.='</tr>';
			$content.='</table>';
		}
		echo $content;
	}
	
	private function countAnuitas()
	{
		extract($_POST);
	}
	
	private function countFlat()
	{
		extract($_POST);
		//BesarBunga = (BesarPengajuan * ((SukuBunga / 100) / 12)) * JangkaWaktu
		$BesarBunga = ($jumlah_pinjaman * ( ($bunga / 100) /12) ) * $jangka_waktu;
	}
	
	private function roundNearestHundredUp($number)
	{
		if($number<100)
		{
			return 0;	
		}
		return ceil( $number / 100 ) * 100;
	}
	
	private function roundNearestHundredDown($number)
	{
		if($number<100)
		{
			return 0;	
		}
		return floor( $number / 100 ) * 100;
	}
}