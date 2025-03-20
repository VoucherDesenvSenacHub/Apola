    // Dados dos gráficos de linha (sem valores específicos, apenas para ilustração)
    const dadosClicks = [120, 130, 150, 170, 180, 200, 220];
    const dadosViews = [80, 90, 100, 110, 120, 130, 140];
    const dadosLeads = [30, 35, 40, 45, 50, 55, 60];
    const dadosSales = [10, 12, 15, 18, 20, 25, 30];

    const cores = ['#008FFB', '#00E396', '#FEB019', '#FF4560'];

    // Opções para gráficos de linha minimalistas
    var options = {
        chart: {
            type: 'line',
            height: 80, // Altura do gráfico
            width: '100%',
            background: 'transparent',
            sparkline: {
                enabled: true // Ativa o gráfico como sparkline (sem eixo e valores)
            }
        },
        series: [{
            name: 'Métrica',
            data: [] // Será preenchido por cada conjunto de dados
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'], // Meses
            labels: {
                show: false, // Não exibe os labels no eixo X
            }
        },
        yaxis: {
            show: false, // Não exibe o eixo Y
        },
        stroke: {
            curve: 'smooth', // Linha suave
            width: 5, // Espessura da linha
        },
        markers: {
            size: 0, // Não exibe os pontos nos dados
        },
        colors: cores, // Lista de cores para as linhas
        tooltip: {
            enabled: true, // Habilita o tooltip
            shared: true, // Exibe os valores de múltiplas séries
            intersect: false, // Faz o tooltip aparecer quando o cursor passa por qualquer ponto da linha
            x: {
                show: true, // Mostra o eixo X no tooltip
                formatter: function (value) {
                    return value; // Mostra o mês (categoria) no tooltip
                }
            },
            y: {
                formatter: function (value) {
                    return value.toFixed(0); // Exibe o valor com 0 casas decimais
                }
            },
            theme: 'dark', // Tema escuro para o tooltip
            style: {
                fontSize: '12px', // Tamanho da fonte do tooltip
                fontFamily: 'Arial, sans-serif', // Fonte do tooltip
            }
        },
        grid: {
            show: false, // Remove a grade do gráfico
        },
        fill: {
            type: 'solid', // Preenchimento sólido abaixo da linha
            //color: 'black',  Cor abaixo da linha (altere para a cor que preferir)
            opacity: 0.9 // Opacidade da cor de preenchimento
        }
    };

    // Renderizando o gráfico de Clicks
    options.series[0].data = dadosClicks;
    options.colors = [cores[0]]; // Alterando a cor para o primeiro valor da lista
    var chartClicks = new ApexCharts(document.querySelector("#graficoClicks"), options);
    chartClicks.render();

    // Renderizando o gráfico de Views com a cor personalizada
    options.series[0].data = dadosViews;
    options.colors = [cores[1]]; // Alterando a cor para o segundo valor da lista
    var chartViews = new ApexCharts(document.querySelector("#graficoViews"), options);
    chartViews.render();

    // Renderizando o gráfico de Leads com a cor personalizada
    options.series[0].data = dadosLeads;
    options.colors = [cores[2]]; // Alterando a cor para o terceiro valor da lista
    var chartLeads = new ApexCharts(document.querySelector("#graficoLeads"), options);
    chartLeads.render();

    // Renderizando o gráfico de Sales com a cor personalizada
    options.series[0].data = dadosSales;
    options.colors = [cores[3]]; // Alterando a cor para o quarto valor da lista
    var chartSales = new ApexCharts(document.querySelector("#graficoSales"), options);
    chartSales.render();

    // var options = {
    //         series: [{
    //         name: "Desktops",
    //         data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
    //     }],
    //       chart: {
    //       height: 350,
    //       type: 'line',
    //       zoom: {
    //         enabled: false
    //       }
    //     },
    //     dataLabels: {
    //       enabled: false
    //     },
    //     stroke: {
    //       curve: 'straight'
    //     },
    //     title: {
    //       text: 'Product Trends by Month',
    //       align: 'left'
    //     },
    //     grid: {
    //       row: {
    //         colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
    //         opacity: 0.5
    //       },
    //     },
    //     xaxis: {
    //       categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
    //     }
    //     };

    //     var chart = new ApexCharts(document.querySelector("#chart"), options);
    //     chart.render();
        // Dados dos produtos e suas vendas
        // Dados dos produtos e suas vendas
        const produtos = ['Amigurumi Raposa', 'Amigurumi Urso', 'Vaso de Plantas'];
        const vendas = [150, 300, 250]; // Quantidade de vendas

        var optionsProdutosVendidos = {
            chart: {
                type: 'bar',
                height: window.innerWidth <= 1318 ? 250 : 350, // Ajusta altura baseado no tamanho da tela
                width: '100%', // Faz o gráfico ocupar toda a largura disponível
                background: 'transparent',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    borderRadius: 8,
                    dataLabels: {
                        position: 'top',
                    }
                }
            },
            series: [{
                name: 'Vendas',
                data: vendas,
            }],
            xaxis: {
                categories: produtos,
                labels: {
                    style: {
                        colors: 'black'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: 'black'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val;
                },
                style: {
                    colors: ['black']
                }
            },
            colors: ['#FA301E', '#4CAF50', '#FFC107', '#2196F3', '#9C27B0']
        };

        // Renderize o gráfico de produtos vendidos
        var chart1 = new ApexCharts(document.querySelector("#grafico1"), optionsProdutosVendidos);
        chart1.render();


        const categorias = ['Amigurumi', 'Cachepô', 'Porta-chaves', 'Bordado'];
        const medias = [75, 60, 90, 50]; // Valores em porcentagem

        var optionsMediaCategorias = {
            chart: {
                type: 'donut', // Tipo de gráfico (donut)
                // height: 350,
                // width: 340,
                height: 450,
                width: 450,
                background: 'transparent',
            },
            series: medias, // Dados das médias
            labels: categorias, // Nomes das categorias
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%', // Tamanho do centro vazio (tamanho do buraco)
                        labels: {
                            show: true,
                            name: {
                                show: true, // Exibe o nome da categoria no centro
                                fontSize: '16px',
                                fontWeight: 600,
                            },
                            value: {
                                show: true, // Exibe o valor percentual
                                fontSize: '14px',
                                fontWeight: 400,
                            },
                            total: {
                                show: true, // Exibe o total no centro
                                label: 'Média Total',
                                fontSize: '20px',
                                fontWeight: 700,
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => a + b, 0) / w.globals.series.length + "%"; // Cálculo da média total
                                }
                            }
                        }
                    }
                }
            },
            // dataLabels: {
            //     enabled: true,
            //     formatter: function (val) {
            //         return val + "%"; // Exibe os valores das fatias em porcentagem
            //     },
            //     style: {
            //         colors: ['black'] // Cor do texto dos rótulos
            //     }
            // },
            colors: ['#FA301E', '#F9A825', '#FFEB3B', '#00C853', '#1976D2'], // Cores das fatias
            responsive: [
                {
                    breakpoint: 1318, // Quando a largura da tela for menor que 1318px
                    options: {
                        chart: {
                            height: 350, // Altura para telas menores
                            width: 340,  // Largura para telas menores
                        },
                    }
                }
            ]
        };

        // Renderiza o gráfico
        var chart2 = new ApexCharts(document.querySelector("#grafico2"), optionsMediaCategorias);
        chart2.render();



        var optionsProgress1 = {
            chart: {
                height: 70,
                width: 600,
                type: "bar",
                stacked: true,
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: "20%",
                    colors: {
                        backgroundBarColors: ["#40475D"]
                    }
                }
            },
            stroke: {
                width: 0
            },
            series: [
                {
                    name: "Process 1",
                    data: [44]
                }
            ],
            title: {
                floating: true,
                offsetX: -10,
                offsetY: 5,
                text: "Categoria 1"
            },
            subtitle: {
                floating: true,
                align: "right",
                offsetY: 0,
                text: "44%",
                style: {
                    fontSize: "20px"
                }
            },
            tooltip: {
                enabled: false
            },
            xaxis: {
                categories: ["Process 1"]
            },
            yaxis: {
                max: 100
            },
            fill: {
                opacity: 1,
                type: "gradient",
                gradient: {
                    gradientToColors: ["#00FFFF"]
                }
            }
        };

        var chartProgress1 = new ApexCharts(
            document.querySelector("#progress1"),
            optionsProgress1
        );
        chartProgress1.render();

        var optionsProgress2 = {
            chart: {
                height: 70,
                width: 600,
                type: "bar",
                stacked: true,
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: "20%",
                    colors: {
                        backgroundBarColors: ["#40475D"]
                    }
                }
            },
            colors: ["#008080"],
            stroke: {
                width: 0
            },
            series: [
                {
                    name: "Process 2",
                    data: [80]
                }
            ],
            title: {
                floating: true,
                offsetX: -10,
                offsetY: 5,
                text: "Categoria 2"
            },
            subtitle: {
                floating: true,
                align: "right",
                offsetY: 0,
                text: "80%",
                style: {
                    fontSize: "20px"
                }
            },
            tooltip: {
                enabled: false
            },
            xaxis: {
                categories: ["Process 2"]
            },
            yaxis: {
                max: 100
            },
            fill: {
                type: "gradient",
                gradient: {
                    // inverseColors: false,
                    gradientToColors: ["#00FA9A"]
                }
            }
        };

        var chartProgress2 = new ApexCharts(
            document.querySelector("#progress2"),
            optionsProgress2
        );
        chartProgress2.render();

        var optionsProgress3 = {
            chart: {
                height: 70,
                width: 600,
                type: "bar",
                stacked: true,
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: "20%",
                    colors: {
                        backgroundBarColors: ["#40475D"]
                    }
                }
            },
            colors: ["#FF1493"],
            stroke: {
                width: 0
            },
            series: [
                {
                    name: "Process 3",
                    data: [74]
                }
            ],
            fill: {
                type: "gradient",
                gradient: {
                    gradientToColors: ["#FF00FF"]
                }
            },
            title: {
                floating: true,
                offsetX: -10,
                offsetY: 5,
                text: "Categoria 3"
            },
            subtitle: {
                floating: true,
                align: "right",
                offsetY: 0,
                text: "74%",
                style: {
                    fontSize: "20px"
                }
            },
            tooltip: {
                enabled: false
            },
            xaxis: {
                categories: ["Process 3"]
            },
            yaxis: {
                max: 100
            }
        };

        var chartProgress3 = new ApexCharts(
            document.querySelector("#progress3"),
            optionsProgress3
        );
        chartProgress3.render();

        var optionsProgress4 = {
            chart: {
                height: 70,
                width: '100%',
                type: "bar",
                stacked: true,
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                    barHeight: "20%",
                    colors: {
                        backgroundBarColors: ["#40475D"]
                    }
                }
            },
            colors: ["#FFD700"],
            stroke: {
                width: 0
            },
            series: [
                {
                    name: "Categoria 4",
                    data: [84]
                }
            ],
            title: {
                floating: true,
                offsetX: -10,
                offsetY: 5,
                text: 'categoria 4',
            },
            subtitle: {
                floating: true,
                align: "right",
                offsetY: 0,
                text: "44%",
                style: {
                    fontSize: "20px"
                }
            },
            tooltip: {
                enabled: false
            },
            xaxis: {
                categories: ["Categoria 4"]
            },
            yaxis: {
                max: 100
            },
            fill: {
                opacity: 1,
                type: "gradient",
                gradient: {
                    gradientToColors: ["#FFFF00"]
                }
            }
        };

        var chartProgress4 = new ApexCharts(
            document.querySelector("#progress4"),
            optionsProgress4
        );
        chartProgress4.render();




    // Função para ajustar a largura do progresso de acordo com o tamanho da tela
function ajustaLarguraProgresso() {
    // Obtém a largura da tela
    let larguraTela = window.innerWidth;

    // Define uma largura base para o gráfico de progresso (em pixels)
    let larguraBase = larguraTela * 0.42; // 90% da largura da tela

    // Aplica a largura dinâmica nos gráficos de progresso
    chartProgress1.updateOptions({
        chart: {
            width: larguraBase
        }
    });

    chartProgress2.updateOptions({
        chart: {
            width: larguraBase
        }
    });

    chartProgress3.updateOptions({
        chart: {
            width: larguraBase
        }
    });

    chartProgress4.updateOptions({
        chart: {
            width: larguraBase
        }
    });
}

// Chama a função inicialmente para ajustar os gráficos de progresso na carga da página
ajustaLarguraProgresso();

// Adiciona um evento para ajustar os gráficos de progresso quando a janela for redimensionada
window.addEventListener('resize', ajustaLarguraProgresso);

    