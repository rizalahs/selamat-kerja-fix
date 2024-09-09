/**
 * Charts Apex
 */

'use strict';

(function () {
  let cardColor, labelColor, borderColor, legendColor;

  // Pastikan `config` sudah didefinisikan sebelum digunakan
  if (typeof config !== 'undefined') {
    if (isDarkStyle) {
      cardColor = config.colors_dark.cardColor;
      labelColor = config.colors_dark.textMuted;
      legendColor = config.colors_dark.bodyColor;
      borderColor = config.colors_dark.borderColor;
    } else {
      cardColor = config.colors.cardColor;
      labelColor = config.colors.textMuted;
      legendColor = config.colors.bodyColor;
      borderColor = config.colors.borderColor;
    }
  } else {
    console.error('Config is not defined');
    // Tentukan default values sebagai fallback
    cardColor = '#fff';
    labelColor = '#888';
    legendColor = '#444';
    borderColor = '#ddd';
  }

  // Color constant
  const chartColors = {
    column: {
      series1: '#826af9',
      series2: '#d2b0ff',
      bg: '#f8d3ff'
    },
    donut: {
      series1: '#fee802',
      series2: '#3fd0bd',
      series3: '#826bf8',
      series4: '#2b9bf4'
    },
    area: {
      series1: '#B983FF', // Soft Purple
      series2: '#6A0572', // Deep Violet
      series3: '#FF79C6'  // Soft Pink
    }
  };

  // Heat chart data generator
  function generateDataHeat(count, yrange) {
    let series = [];
    for (let i = 0; i < count; i++) {
      let x = 'w' + (i + 1).toString();
      let y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
      series.push({ x: x, y: y });
    }
    return series;
  }

  // Line Area Chart
  // --------------------------------------------------------------------
  const areaChartEl = document.querySelector('#lineAreaChart'),
  areaChartConfig = {
    chart: {
      height: 400,
      type: 'area',
      parentHeightOffset: 0,
      toolbar: {
        show: false
      }
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: false,
      curve: 'straight'
    },
    legend: {
      show: true,
      position: 'top',
      horizontalAlign: 'start',
      labels: {
        colors: legendColor,
        useSeriesColors: false
      }
    },
    grid: {
      borderColor: borderColor,
      xaxis: {
        lines: {
          show: true
        }
      }
    },
    colors: [chartColors.area.series3, chartColors.area.series2, chartColors.area.series1],
    series: [
      {
        name: 'Visits',
        data: [100, 120, 90, 170, 130, 160, 140, 240, 220, 180, 270, 280, 375]
      },
      {
        name: 'Clicks',
        data: [60, 80, 70, 110, 80, 100, 90, 180, 160, 140, 200, 220, 275]
      },
      {
        name: 'Sales',
        data: [20, 40, 30, 70, 40, 60, 50, 140, 120, 100, 140, 180, 220]
      }
    ],
    xaxis: {
      categories: [
        '7/12',
        '8/12',
        '9/12',
        '10/12',
        '11/12',
        '12/12',
        '13/12',
        '14/12',
        '15/12',
        '16/12',
        '17/12',
        '18/12',
        '19/12',
        '20/12'
      ],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        style: {
          colors: labelColor,
          fontSize: '13px'
        }
      }
    },
    yaxis: {
      labels: {
        style: {
          colors: labelColor,
          fontSize: '13px'
        }
      }
    },
    fill: {
      opacity: 1,
      type: 'solid'
    },
    tooltip: {
      shared: false
    }
  };
if (typeof areaChartEl !== undefined && areaChartEl !== null) {
  const areaChart = new ApexCharts(areaChartEl, areaChartConfig);
  areaChart.render();
}

const radarChartEl = document.querySelector('#radarChart'),
  radarChartConfig = {
    chart: {
      height: 350,
      type: 'radar',
      toolbar: {
        show: false
      },
      dropShadow: {
        enabled: false,
        blur: 8,
        left: 1,
        top: 1,
        opacity: 0.2
      }
    },
    legend: {
      show: true,
      position: 'bottom',
      labels: {
        colors: legendColor,
        useSeriesColors: false
      }
    },
    plotOptions: {
      radar: {
        polygons: {
          strokeColors: borderColor,
          connectorColors: borderColor
        }
      }
    },
    yaxis: {
      show: false
    },
    series: [
      {
        name: 'iPhone 12',
        data: [41, 64, 81, 60, 42, 42, 33, 23]
      },
      {
        name: 'Samsung s20',
        data: [65, 46, 42, 25, 58, 63, 76, 43]
      }
    ],
    colors: [chartColors.donut.series1, chartColors.donut.series3],
    xaxis: {
      categories: ['Battery', 'Brand', 'Camera', 'Memory', 'Storage', 'Display', 'OS', 'Price'],
      labels: {
        show: true,
        style: {
          colors: [labelColor, labelColor, labelColor, labelColor, labelColor, labelColor, labelColor, labelColor],
          fontSize: '13px',
          fontFamily: 'Public Sans'
        }
      }
    },
    fill: {
      opacity: [1, 0.8]
    },
    stroke: {
      show: false,
      width: 0
    },
    markers: {
      size: 0
    },
    grid: {
      show: false,
      padding: {
        top: -20,
        bottom: -20
      }
    }
  };
if (typeof radarChartEl !== undefined && radarChartEl !== null) {
  const radarChart = new ApexCharts(radarChartEl, radarChartConfig);
  radarChart.render();
}

})();
