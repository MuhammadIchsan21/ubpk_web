<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gridlines Example</title>
    <style>
        /* CSS untuk gridlines */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        th {
            background-color: #f2f2f2;
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr style="border-top: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <th> <img src="{{ asset('img/logopatria.png') }}" height="40"> </th>
                <th rowspan="2">
                    <p
                        style="custom-font text-center, font-family: 'Arial', sans-serif; font-size: 18px; color: #030303; ">
                        INSPECTION SHEET QUALITY FUNCTION DEPLOYMENT PLANNING(QFDP)</p>
                </th>
                <th>
                    <p class="custom-font text-center"> Rev </p>
                </th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border-left: 3px solid black; border-right: 3px solid black;">
                <td> No Dokumen: QC/IS/001 </td>
                <td rowspan="2">
                    <p class="custom-font text-center">IS A QFDP</p>
                </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <img src="{{ asset('img/ttd.png') }}" height="50"></td>
            </tr>
            <tr style="border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black;">
                <td> Tanggal: 15/03/2023 </td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> UNIT MODEL </td>
                <td> </td>
                <td>DRAWING REVISI</td>
                <td> - </td>
                <td></td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">NAMA BAGIAN</td>
                <td>VESSEL WESTECH EH4500 EUCLID</td>
                <td>CUSTOMER</td>
                <td>TRIATRA SINERGI PRATAMA</td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> PART NUMBER</td>
                <td> </td>
                <td> QUANTITY ORDER </td>
                <td> 1 SET </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> NO PRO </td>
                <td> 4300000505 </td>
                <td> TARGET DELIVERY </td>
                <td> URGENT</td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>

        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th style="border-left: 3px solid black;"> No </th>
                <th>
                    <p class="custom-font text-center"> Part Number
                </th>
                <th> Part Name </th>
                <th> Detail </th>
                <th> Process </th>
                <th> Grade </th>
                <th> Tebal </th>
                <th> Bobot(Kg) </th>
                <th> Desc </th>
                <th> Qty Std </th>
                <th> Qty Ord </th>
                <th> Qty Act </th>
                <th colspan="7" style="border-right: 3px solid black;"> Standart Proses </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-left: 3px solid black;">
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> -
                </td>
                <td> BOTTOM BODY </td>
                <td>
                    <p class="custom-font text-center"> SUB
                </td>
                <td>
                    <p class="custom-font text-center"> IH
                </td>
                <td>
                    <p class="custom-font text-center"> G250
                </td>
                <td>
                    <p class="custom-font text-center"> 10
                </td>
                <td>
                    <p class="custom-font text-center"> 215.01
                </td>
                <td> </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td> CT </td>
                <td> SG </td>
                <td> RD </td>
                <td> BD</td>
                <td> SA</td>
                <td> LB </td>
                <td style="border-right: 3px solid black;"> FN </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">
                    <p class="custom-font text-center"> 2
                </td>
                <td>
                    <p class="custom-font text-center"> -
                </td>
                <td> DOUBLER TOP BODY SEGMEN 1 </td>
                <td>
                    <p class="custom-font text-center"> SUB
                </td>
                <td>
                    <p class="custom-font text-center"> IH
                </td>
                <td>
                    <p class="custom-font text-center"> G250
                </td>
                <td>
                    <p class="custom-font text-center"> 10
                </td>
                <td>
                    <p class="custom-font text-center"> 215.01
                </td>
                <td> </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td style="border-right: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">
                    <p class="custom-font text-center"> 3
                </td>
                <td>
                    <p class="custom-font text-center"> -
                </td>
                <td> DOUBLER TOP BODY SEGMEN 2 </td>
                <td>
                    <p class="custom-font text-center"> ASSY
                </td>
                <td>
                    <p class="custom-font text-center"> IH
                </td>
                <td>
                    <p class="custom-font text-center"> G250
                </td>
                <td>
                    <p class="custom-font text-center"> 10
                </td>
                <td>
                    <p class="custom-font text-center"> 189.10
                </td>
                <td> </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td style="border-right: 3px solid black;"></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;">
                    <p class="custom-font text-center"> 4
                </td>
                <td>
                    <p class="custom-font text-center"> -
                </td>
                <td> DOUBLER TOP BODY SEGMEN 3 </td>
                <td>
                    <p class="custom-font text-center"> SUB
                </td>
                <td>
                    <p class="custom-font text-center"> IH
                </td>
                <td>
                    <p class="custom-font text-center"> G250
                </td>
                <td>
                    <p class="custom-font text-center"> 10
                </td>
                <td>
                    <p class="custom-font text-center"> 189.19
                </td>
                <td> </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td style="border-right: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>

                <td style="border-left: 3px solid black;">
                    <p class="custom-font text-center"> 5
                </td>
                <td>
                    <p class="custom-font text-center"> -
                </td>
                <td> REAR BODY SEGMEN 1</td>
                <td>
                    <p class="custom-font text-center"> SUB
                </td>
                <td>
                    <p class="custom-font text-center"> IH
                </td>
                <td>
                    <p class="custom-font text-center"> G250
                </td>
                <td>
                    <p class="custom-font text-center"> 10
                </td>
                <td>
                    <p class="custom-font text-center"> 275.08
                </td>
                <td> </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td>
                    <p class="custom-font text-center"> 1
                </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
            <tr>
                <td style="border-left: 3px solid black;"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td style="border-right: 3px solid black;"> </td>
            </tr>
    </table>

    <table>
        <thead>
            <tr>
                <td style="border-left: 3px solid black;" rowspan="6"> Keterangan :
                    CT: Plasma Cutting SG: Straight Gas Cutting RD: Radial Drill BD: Bending
                    SA: Sub Assy LB: Liner Boring FN: Finishing/Epoxy</td>
                <td> Diperiksa </td>
                <td> Disetujui </td>
                <td> Mengetahui </td>
            </tr>
            <tr>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
                <td rowspan="4"></td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>

            </tr>
            <tr>
                <td> Engineering </td>
                <td> PPC </td>
                <td> SPV </td>
            </tr>
        </thead>
    </table>








</body>

</html>