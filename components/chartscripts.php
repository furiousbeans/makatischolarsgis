<script>
        var lblyear =[];

        var bangkal_a =[];
        var belair_a =[];
        var carmona_a =[];
        var cembo_a =[];
        var comembo_a =[];
        var dasmarinas_a =[];
        var eastrembo_a =[];
        var forbespark_a =[];
        var guadalupenuevo_a =[];
        var guadalupeviejo_a =[];
        var kasilawan_a =[];
        var lapaz_a =[];
        var magallanes_a =[];
        var olympia_a =[];
        var pembo_a =[];
        var pinagkaisahan_a =[];
        var palanan_a =[];
        var pio_a =[];
        var pitogo_a =[];
        var poblacion_a =[];
        var ppnorth_a =[];
        var ppsouth_a =[];
        var rizal_a =[];
        var sanantonio_a =[];
        var sanisidro_a =[];
        var sanlorenzo_a =[];
        var santacruz_a =[];
        var singkamas_a =[];
        var southcembo_a =[];
        var tejeros_a =[];
        var urdaneta_a =[];
        var valenzuela_a =[];
        var westrembo_a =[];


        var bangkal_b =[];
        var belair_b =[];
        var carmona_b =[];
        var cembo_b =[];
        var comembo_b =[];
        var dasmarinas_b =[];
        var eastrembo_b =[];
        var forbespark_b =[];
        var guadalupenuevo_b =[];
        var guadalupeviejo_b =[];
        var kasilawan_b =[];
        var lapaz_b =[];
        var magallanes_b =[];
        var olympia_b =[];
        var pembo_b =[];
        var pinagkaisahan_b =[];
        var palanan_b =[];
        var pio_b =[];
        var pitogo_b =[];
        var poblacion_b =[];
        var ppnorth_b =[];
        var ppsouth_b =[];
        var rizal_b =[];
        var sanantonio_b =[];
        var sanisidro_b =[];
        var sanlorenzo_b =[];
        var santacruz_b =[];
        var singkamas_b =[];
        var southcembo_b =[];
        var tejeros_b =[];
        var urdaneta_b =[];
        var valenzuela_b =[];
        var westrembo_b =[];


        var bangkal_c =[];
        var belair_c =[];
        var carmona_c =[];
        var cembo_c =[];
        var comembo_c =[];
        var dasmarinas_c =[];
        var eastrembo_c =[];
        var forbespark_c =[];
        var guadalupenuevo_c =[];
        var guadalupeviejo_c =[];
        var kasilawan_c =[];
        var lapaz_c =[];
        var magallanes_c =[];
        var olympia_c =[];
        var pembo_c =[];
        var pinagkaisahan_c =[];
        var palanan_c =[];
        var pio_c =[];
        var pitogo_c =[];
        var poblacion_c =[];
        var ppnorth_c =[];
        var ppsouth_c =[];
        var rizal_c =[];
        var sanantonio_c =[];
        var sanisidro_c =[];
        var sanlorenzo_c =[];
        var santacruz_c =[];
        var singkamas_c =[];
        var southcembo_c =[];
        var tejeros_c =[];
        var urdaneta_c =[];
        var valenzuela_c =[];
        var westrembo_c =[];

        var belair_total = belair_a + belair_b;
        var carmona_total =[];
        var cembo_total =[];
        var comembo_total =[];
        var dasmarinas_total =[];
        var eastrembo_total =[];
        var forbespark_total =[];
        var guadalupenuevo_total =[];
        var guadalupeviejo_total =[];
        var kasilawan_total =[];
        var lapaz_total =[];
        var magallanes_total =[];
        var olympia_total =[];
        var pembo_total =[];
        var pinagkaisahan_total =[];
        var palanan_total =[];
        var pio_total =[];
        var pitogo_total =[];
        var poblacion_total =[];
        var ppnorth_total =[];
        var ppsouth_total =[];
        var rizal_total =[];
        var sanantonio_total =[];
        var sanisidro_total =[];
        var sanlorenzo_total =[];
        var santacruz_total =[];
        var singkamas_total =[];
        var southcembo_total =[];
        var tejeros_total =[];
        var urdaneta_total =[];
        var valenzuela_total =[];
        var westrembo_total =[];

        console.log(belair_total);

        var myChart;

        var brgyid;

        createChart();

        // ChartJS
        async function createChart(){
            await getCSV();
            var ctx1 = document.getElementById('tbl').getContext('2d');
            myChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels:lblyear,
                    datasets: [
                        {
                            label: 'Scholar Type A',
                            data: bangkal_a,
                            backgroundColor: 'rgba(29, 181, 90, 0.7)',
                            borderColor: 'rgba(29, 181, 90, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Scholar Type B',
                            data: bangkal_b,
                            backgroundColor: 'rgba(87, 51, 128, 0.7)',
                            borderColor: 'rgba(87, 51, 128, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Scholar Type C',
                            data: bangkal_c,
                            backgroundColor: 'rgba(94, 200, 230, 0.7)',
                            borderColor: 'rgba(94, 200, 230, 1)',
                            borderWidth: 1
                        },
                        {
                            data: bangkal_a,
                            label: 'Total Scholars',
                            type: 'line',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            backgroundColor: 'rgba(255, 99, 132, 0)',
                        },
                    ]
                },
                options: {
                    scales: {
                        xAxes: [{ 
                            stacked: true, 
                            gridLines: { display: false },
                            }],
                        yAxes: [{ 
                            stacked: true, 
                            }],
                    },
                }
            });

            // var ctx2 = document.getElementById('pieChart').getContext('2d');
            // var myPieChart = new Chart(ctx2, {
            //     type: 'pie',
            //     data: {
            //         datasets: [
            //             {
            //                 label: 'Scholar Type A',
            //                 data: [brgy1A,brgy1B,brgy1C],
            //                 backgroundColor: 'rgba(29, 181, 90, 0.7)',
            //                 borderColor: 'rgba(29, 181, 90, 1)',
            //                 borderWidth: 1
            //             }
            //         ]
            //     }
            // });
        };


        // get CSV
        // async function getCSV(){
        //     var response = await fetch("../assets/data/test.csv")
        //     var data = await response.text();

        //     var table = data.split('\n').slice(1);
        //     table.forEach(row =>{
        //         var columns = row.split(',');
        //         var year=columns[0];
        //         var brg1A=columns[1];
        //         var brg1B=columns[2];
        //         var brg1C=columns[3];
        //         var brg2A=columns[4];
        //         var brg2B=columns[5];
        //         var brg2C=columns[6];
        //         var brg3A=columns[7];
        //         var brg3B=columns[8];
        //         var brg3C=columns[9];
        //         var brg4A=columns[10];
        //         var brg4B=columns[11];
        //         var brg4C=columns[12];
        //         var brg5A=columns[13];
        //         var brg5B=columns[14];
        //         var brg5C=columns[15];
        //         var totA=columns[16];
        //         var totB=columns[17];
        //         var totC=columns[18];
        //         var sum = columns[19];
        //         // console.log(row);
        //         // console.log(year,brg1,brg2,brg3,brg4,brg5)

        //         lblyear.push(year);
        //         brgy1A.push(brg1A);
        //         brgy1B.push(brg1B);
        //         brgy1C.push(brg1C);
        //         brgy2A.push(brg2A);
        //         brgy2B.push(brg2B);
        //         brgy2C.push(brg2C);
        //         brgy3A.push(brg3A);
        //         brgy3B.push(brg3B);
        //         brgy3C.push(brg3C);
        //         brgy4A.push(brg4A);
        //         brgy4B.push(brg4B);
        //         brgy4C.push(brg4C);
        //         brgy5A.push(brg5A);
        //         brgy5B.push(brg5B);
        //         brgy5C.push(brg5C);
        //         totalA.push(totA);
        //         totalB.push(totB);
        //         totalC.push(totC);
        //         allsch.push(sum);
        //     });
        // }

        async function getCSV(){
            // scholar type a
            var response1 = await fetch("../assets/data/scholars/scholar_a.csv")
            var data1 = await response1.text();

            var table1 = data1.split('\n');
            table1.forEach(row =>{
                var columns = row.split(',');
                var year=columns[1];
                var bangkal_a1=columns[2];
                var belair_a1=columns[3];
                var carmona_a1=columns[4];
                var cembo_a1=columns[5];
                var comembo_a1=columns[6];
                var dasmarinas_a1=columns[7];
                var eastrembo_a1=columns[8];
                var forbespark_a1=columns[9];
                var guadalupenuevo_a1=columns[10];
                var guadalupeviejo_a1=columns[11];
                var kasilawan_a1=columns[12];
                var lapaz_a1=columns[13];
                var magallanes_a1=columns[14];
                var olympia_a1=columns[15];
                var palanan_a1=columns[16];
                var pembo_a1=columns[17];
                var pinagkaisahan_a1=columns[18];
                var pio_a1=columns[19];
                var pitogo_a1 = columns[20];
                var poblacion_a1 = columns[21];
                var ppnorth_a1 = columns[22];
                var ppsouth_a1 = columns[23];
                var rizal_a1 = columns[24];
                var sanantonio_a1 = columns[25];
                var sanisidro_a1 = columns[26];
                var sanlorenzo_a1 = columns[27];
                var santacruz_a1 = columns[28];
                var singkamas_a1 = columns[29];
                var southcembo_a1 = columns[30];
                var tejeros_a1 = columns[31];
                var urdaneta_a1 = columns[32];
                var valenzuela_a1 = columns[33];
                var westrembo_a1 = columns[34];
                console.log(year,bangkal_a1);
                // console.log(year,brg1,brg2,brg3,brg4,brg5)

                lblyear.push(year);
                bangkal_a.push(bangkal_a1);
                belair_a.push(belair_a1);
                carmona_a.push(carmona_a1);
                cembo_a.push(cembo_a1);
                comembo_a.push(comembo_a1);
                dasmarinas_a.push(dasmarinas_a1);
                eastrembo_a.push(eastrembo_a1);
                forbespark_a.push(forbespark_a1);
                guadalupenuevo_a.push(guadalupenuevo_a1);
                guadalupeviejo_a.push(guadalupeviejo_a1);
                kasilawan_a.push(kasilawan_a1);
                lapaz_a.push(lapaz_a1);
                magallanes_a.push(magallanes_a1);
                olympia_a.push(olympia_a1);
                pembo_a.push(pembo_a1);
                palanan_a.push(palanan_a1);
                pinagkaisahan_a.push(pinagkaisahan_a1);
                pio_a.push(pio_a1);
                pitogo_a.push(pitogo_a1);
                poblacion_a.push(poblacion_a1);
                ppnorth_a.push(ppnorth_a1);
                ppsouth_a.push(ppsouth_a1);
                rizal_a.push(rizal_a1);
                sanantonio_a.push(sanantonio_a1);
                sanisidro_a.push(sanisidro_a1);
                sanlorenzo_a.push(sanlorenzo_a1);
                santacruz_a.push(santacruz_a1);
                singkamas_a.push(singkamas_a1);
                southcembo_a.push(southcembo_a1);
                tejeros_a.push(tejeros_a1);
                urdaneta_a.push(urdaneta_a1);
                valenzuela_a.push(valenzuela_a1);
                westrembo_a.push(westrembo_a1);
            });
            // scholar type a
            var response1 = await fetch("../assets/data/scholars/scholar_b.csv")
            var data1 = await response1.text();

            var table1 = data1.split('\n');
            table1.forEach(row =>{
                var columns = row.split(',');
                var year=columns[1];
                var bangkal_b1=columns[2];
                var belair_b1=columns[3];
                var carmona_b1=columns[4];
                var cembo_b1=columns[5];
                var comembo_b1=columns[6];
                var dasmarinas_b1=columns[7];
                var eastrembo_b1=columns[8];
                var forbespark_b1=columns[9];
                var guadalupenuevo_b1=columns[10];
                var guadalupeviejo_b1=columns[11];
                var kasilawan_b1=columns[12];
                var lapaz_b1=columns[13];
                var magallanes_b1=columns[14];
                var olympia_b1=columns[15];
                var palanan_b1=columns[16];
                var pembo_b1=columns[17];
                var pinagkaisahan_b1=columns[18];
                var pio_b1=columns[19];
                var pitogo_b1 = columns[20];
                var poblacion_b1 = columns[21];
                var ppnorth_b1 = columns[22];
                var ppsouth_b1 = columns[23];
                var rizal_b1 = columns[24];
                var sanantonio_b1 = columns[25];
                var sanisidro_b1 = columns[26];
                var sanlorenzo_b1 = columns[27];
                var santacruz_b1 = columns[28];
                var singkamas_b1 = columns[29];
                var southcembo_b1 = columns[30];
                var tejeros_b1 = columns[31];
                var urdaneta_b1 = columns[32];
                var valenzuela_b1 = columns[33];
                var westrembo_b1 = columns[34];
                // console.log(row);
                // console.log(year,brg1,brg2,brg3,brg4,brg5)

                bangkal_b.push(bangkal_b1);
                belair_b.push(belair_b1);
                carmona_b.push(carmona_b1);
                cembo_b.push(cembo_b1);
                comembo_b.push(comembo_b1);
                dasmarinas_b.push(dasmarinas_b1);
                eastrembo_b.push(eastrembo_b1);
                forbespark_b.push(forbespark_b1);
                guadalupenuevo_b.push(guadalupenuevo_b1);
                guadalupeviejo_b.push(guadalupeviejo_b1);
                kasilawan_b.push(kasilawan_b1);
                lapaz_b.push(lapaz_b1);
                magallanes_b.push(magallanes_b1);
                palanan_b.push(palanan_b1);
                olympia_b.push(olympia_b1);
                pembo_b.push(pembo_b1);
                pinagkaisahan_b.push(pinagkaisahan_b1);
                pio_b.push(pio_b1);
                pitogo_b.push(pitogo_b1);
                poblacion_b.push(poblacion_b1);
                ppnorth_b.push(ppnorth_b1);
                ppsouth_b.push(ppsouth_b1);
                rizal_b.push(rizal_b1);
                sanantonio_b.push(sanantonio_b1);
                sanisidro_b.push(sanisidro_b1);
                sanlorenzo_b.push(sanlorenzo_b1);
                santacruz_b.push(santacruz_b1);
                singkamas_b.push(singkamas_b1);
                southcembo_b.push(southcembo_b1);
                tejeros_b.push(tejeros_b1);
                urdaneta_b.push(urdaneta_b1);
                valenzuela_b.push(valenzuela_b1);
                westrembo_b.push(westrembo_b1);
            });
            // scholar type a
            var response1 = await fetch("../assets/data/scholars/scholar_c.csv")
            var data1 = await response1.text();

            var table1 = data1.split('\n');
            table1.forEach(row =>{
                var columns = row.split(',');
                var year=columns[1];
                var bangkal_c1=columns[2];
                var belair_c1=columns[3];
                var carmona_c1=columns[4];
                var cembo_c1=columns[5];
                var comembo_c1=columns[6];
                var dasmarinas_c1=columns[7];
                var eastrembo_c1=columns[8];
                var forbespark_c1=columns[9];
                var guadalupenuevo_c1=columns[10];
                var guadalupeviejo_c1=columns[11];
                var kasilawan_c1=columns[12];
                var lapaz_c1=columns[13];
                var magallanes_c1=columns[14];
                var olympia_c1=columns[15];
                var palanan_c1=columns[16];
                var pembo_c1=columns[17];
                var pinagkaisahan_c1=columns[18];
                var pio_c1=columns[19];
                var pitogo_c1 = columns[20];
                var poblacion_c1 = columns[21];
                var ppnorth_c1 = columns[22];
                var ppsouth_c1 = columns[23];
                var rizal_c1 = columns[24];
                var sanantonio_c1 = columns[25];
                var sanisidro_c1 = columns[26];
                var sanlorenzo_c1 = columns[27];
                var santacruz_c1 = columns[28];
                var singkamas_c1 = columns[29];
                var southcembo_c1 = columns[30];
                var tejeros_c1 = columns[31];
                var urdaneta_c1 = columns[32];
                var valenzuela_c1 = columns[33];
                var westrembo_c1 = columns[34];
                // console.log(row);
                // console.log(year,brg1,brg2,brg3,brg4,brg5)

                bangkal_c.push(bangkal_c1);
                belair_c.push(belair_c1);
                carmona_c.push(carmona_c1);
                cembo_c.push(cembo_c1);
                comembo_c.push(comembo_c1);
                dasmarinas_c.push(dasmarinas_c1);
                eastrembo_c.push(eastrembo_c1);
                forbespark_c.push(forbespark_c1);
                guadalupenuevo_c.push(guadalupenuevo_c1);
                guadalupeviejo_c.push(guadalupeviejo_c1);
                kasilawan_c.push(kasilawan_c1);
                lapaz_c.push(lapaz_c1);
                magallanes_c.push(magallanes_c1);
                palanan_c.push(palanan_c1);
                olympia_c.push(olympia_c1);
                pembo_c.push(pembo_c1);
                pinagkaisahan_c.push(pinagkaisahan_c1);
                pio_c.push(pio_c1);
                pitogo_c.push(pitogo_c1);
                poblacion_c.push(poblacion_c1);
                ppnorth_c.push(ppnorth_c1);
                ppsouth_c.push(ppsouth_c1);
                rizal_c.push(rizal_c1);
                sanantonio_c.push(sanantonio_c1);
                sanisidro_c.push(sanisidro_c1);
                sanlorenzo_c.push(sanlorenzo_c1);
                santacruz_c.push(santacruz_c1);
                singkamas_c.push(singkamas_c1);
                southcembo_c.push(southcembo_c1);
                tejeros_c.push(tejeros_c1);
                urdaneta_c.push(urdaneta_c1);
                valenzuela_c.push(valenzuela_c1);
                westrembo_c.push(westrembo_c1);
            });
        }

function updateChart(){
    var brgyselect = document.getElementById("brgyselect");
    brgyselect.onchange = function(){

        brgyid = brgyselect.options[brgyselect.selectedIndex].value;
        // alert(brgyid);
        // console.log(brgyid);

        if(brgyid == 1) {
            myChart.data.datasets[0].data = bangkal_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = bangkal_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = bangkal_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = bangkal_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 2) {
            myChart.data.datasets[0].data = belair_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = belair_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = belair_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = belair_c;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 3) {
            myChart.data.datasets[0].data = carmona_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = carmona_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = carmona_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = carmona_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 4) {
            myChart.data.datasets[0].data = cembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = cembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = cembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = cembo_c;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 5) {
            myChart.data.datasets[0].data = comembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = comembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = comembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = comembo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 6) {
            myChart.data.datasets[0].data = dasmarinas_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = dasmarinas_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = dasmarinas_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = dasmarinas_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 7) {
            myChart.data.datasets[0].data = eastrembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = eastrembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = eastrembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = eastrembo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 8) {
            myChart.data.datasets[0].data = forbespark_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = forbespark_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = forbespark_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = forbespark_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 9) {
            myChart.data.datasets[0].data = guadalupenuevo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = guadalupenuevo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = guadalupenuevo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = guadalupenuevo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 10) {
            myChart.data.datasets[0].data = guadalupeviejo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = guadalupeviejo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = guadalupeviejo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = guadalupeviejo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 11) {
            myChart.data.datasets[0].data = kasilawan_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = kasilawan_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = kasilawan_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = kasilawan_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 12) {
            myChart.data.datasets[0].data = lapaz_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = lapaz_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = lapaz_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = lapaz_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 13) {
            myChart.data.datasets[0].data = magallanes_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = magallanes_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = magallanes_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = magallanes_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 14) {
            myChart.data.datasets[0].data = olympia_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = olympia_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = olympia_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = olympia_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 15) {
            myChart.data.datasets[0].data = palanan_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = palanan_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = palanan_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = palanan_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 16) {
            myChart.data.datasets[0].data = pembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = pembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = pembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = pembo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 17) {
            myChart.data.datasets[0].data = pinagkaisahan_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = pinagkaisahan_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = pinagkaisahan_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = pinagkaisahan_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 18) {
            myChart.data.datasets[0].data = pio_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = pio_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = pio_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = pio_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 19) {
            myChart.data.datasets[0].data = pitogo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = pitogo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = pitogo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = pitogo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 20) {
            myChart.data.datasets[0].data = poblacion_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = poblacion_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = poblacion_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = poblacion_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 21) {
            myChart.data.datasets[0].data = ppnorth_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = ppnorth_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = ppnorth_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = ppnorth_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 22) {
            myChart.data.datasets[0].data = ppsouth_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = ppsouth_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = ppsouth_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = ppsouth_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 23) {
            myChart.data.datasets[0].data = rizal_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = rizal_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = rizal_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = rizal_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 24) {
            myChart.data.datasets[0].data = sanantonio_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = sanantonio_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = sanantonio_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = sanantonio_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 25) {
            myChart.data.datasets[0].data = sanisidro_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = sanisidro_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = sanisidro_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = sanisidro_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 26) {
            myChart.data.datasets[0].data = sanlorenzo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = sanlorenzo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = sanlorenzo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = sanlorenzo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 27) {
            myChart.data.datasets[0].data = santacruz_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = santacruz_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = santacruz_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = santacruz_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 28) {
            myChart.data.datasets[0].data = singkamas_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = singkamas_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = singkamas_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = singkamas_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 29) {
            myChart.data.datasets[0].data = southcembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = southcembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = southcembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = southcembo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 30) {
            myChart.data.datasets[0].data = tejeros_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = tejeros_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = tejeros_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = tejeros_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 31) {
            myChart.data.datasets[0].data = urdaneta_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = urdaneta_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = urdaneta_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = urdaneta_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 32) {
            myChart.data.datasets[0].data = valenzuela_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = valenzuela_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = valenzuela_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = valenzuela_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else if(brgyid == 33) {
            myChart.data.datasets[0].data = westrembo_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = westrembo_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = westrembo_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = westrembo_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
        else{
            myChart.data.datasets[0].data = bangkal_a;
            myChart.data.datasets[0].label= 'Scholar Type A';
            myChart.data.datasets[0].backgroundColor= 'rgba(29, 181, 90, 0.7)';
            myChart.data.datasets[0].borderColor= 'rgba(29, 181, 90, 1)',
            myChart.data.datasets[1].data = bangkal_b;
            myChart.data.datasets[1].label= 'Scholar Type B';
            myChart.data.datasets[1].backgroundColor= 'rgba(87, 51, 128, 0.7)';
            myChart.data.datasets[1].borderColor= 'rgba(87, 51, 128, 1)',
            myChart.data.datasets[2].data = bangkal_c;
            myChart.data.datasets[2].label= 'Scholar Type C';
            myChart.data.datasets[2].backgroundColor= 'rgba(94, 200, 230, 0.7)';
            myChart.data.datasets[2].borderColor= 'rgba(94, 200, 230, 1)',
            myChart.data.datasets[3].data = bangkal_a;
            myChart.data.datasets[3].borderColor= 'rgba(255, 99, 132, 1)',
            myChart.update();
        }
    };
};
</script>