import matplotlib.pyplot as plt
import sys
import os
import pandas as pd
from matplotlib.backends.backend_pdf import PdfPages
from datetime import datetime



data = pd.read_csv('material_auxilio.csv')
data2 = pd.read_csv('requisicao.csv')
actual_time = datetime.today().strftime('%d.%m.%Y...%H.%M.%S')
nameArchieveA = 'arquivos/graficos/' + actual_time + '.dados_externos.pdf'
nameArchieveB = 'arquivos/graficos/' + actual_time + '.dados_internos.pdf'
nameArchieve1 = 'arquivos/figuras/' + actual_time + '.fig1.png'
nameArchieve2 = 'arquivos/figuras/' + actual_time + '.fig2.png'
nameArchieve3 = 'arquivos/figuras/' + actual_time + '.fig3.png'
nameArchieve4 = 'arquivos/figuras/' + actual_time + '.fig4.png'
nameArchieve5 = 'arquivos/figuras/' + actual_time + '.fig5.png'
nameArchieve6 = 'arquivos/figuras/' + actual_time + '.fig6.png'
nameArchieve7 = 'arquivos/figuras/' + actual_time + '.fig7.png'
nameArchieve8 = 'arquivos/figuras/' + actual_time + '.fig8.png'

with PdfPages(nameArchieveA) as pp:
    fig1 = data.groupby(['setor'])['qtdeRolo','qtdeBand','qtdeA4','qtdeEnc'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Número de requisições')
    plt.xlabel('Setor')
    plt.title('Quantidade de Requisições por Setor')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve1)
    pp.savefig()
    plt.close()

    fig2 = data.groupby(['setor'])['custoRolo','custoBand','custoA4','custoEnc'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    custoData1 = round(data.custoTotal.sum(),2)
    custoData2 = 'Custo Referente às Requisições por Setor\n(Total em R$:'+ str(custoData1) + ')'
    plt.ylabel('Custo [R$]')
    plt.xlabel('Setor')
    plt.title(custoData2)
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve2)
    pp.savefig()
    plt.close()


with PdfPages(nameArchieveB) as pp:
    fig3 = data2.groupby(['id'])['reqqtdeRolo','reqqtdeA3','reqqtdeA4'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig3 = data2.plot(x='id',y=['reqRolo','reqA3','reqA4'],legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Número de requisições')
    plt.xlabel('Data')
    plt.title('Quantidade de Requisições de Folhas')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve3)
    pp.savefig()
    plt.close()

    fig4 = data2.groupby(['id'])['reqcustoRolo','reqcustoA3','reqcustoA4'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig4 = data2.plot(x='id',y=['reqcustoRolo','reqcustoA3','reqcustoA4'],legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Custo [R$]')
    plt.xlabel('Data')
    plt.title('Custo Referente às Requisições de Folhas')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve4)
    pp.savefig()
    plt.close()


    fig5 = data2.groupby(['id'])['reqqtdeHP200pr','reqqtdeHP200ci','reqqtdeHP200mg','reqqtdeHP200am','reqqtdePlotpr','reqqtdePlotci',
    'reqqtdePlotmg','reqqtdePlotam','reqqtdeHP1606pr'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig5 = data2.plot(x='id',y=['reqHP200pr','reqHP200ci','reqHP200mg','reqHP200am','reqPlotpr','reqPlotci',
    #'reqPlotmg','reqPlotam','reqHP1606pr'],legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Número de requisições')
    plt.xlabel('Data')
    plt.title('Quantidade de Requisições de Cartuchos')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve5)
    pp.savefig()
    plt.close()

    fig6 = data2.groupby(['id'])['reqcustoHP200pr','reqcustoHP200ci','reqcustoHP200mg','reqcustoHP200am',
    'reqcustoPlotpr','reqcustoPlotci','reqcustoPlotmg','reqcustoPlotam','reqcustoHP1606pr'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig6 = data2.plot(x='id',y=['reqcustoHP200pr','reqcustoHP200ci','reqcustoHP200mg','reqcustoHP200am',
    #'reqcustoPlotpr','reqcustoPlotci','reqcustoPlotmg','reqcustoPlotam','reqcustoHP1606pr'],legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Custo [R$]')
    plt.xlabel('Data')
    plt.title('Custo Referente às Requisições de Cartuchos')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve6)
    pp.savefig()
    plt.close()

    fig7 = data2.groupby(['id'])['reqqtdeCpgd','reqqtdeCppq','reqqtdeAlc96','reqqtdeEst','reqqtdePAA','reqqtdePAAA',
    'reqqtdeEnqf','reqqtdeEnqp','reqqtdeEsp9','reqqtdeEsp12','reqqtdeEsp14','reqqtdeEsp23'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig7 = data2.plot(x='id',y=['reqCpgd','reqCppq','reqAlc96','reqEst','reqPAA','reqPAAA',
    #'reqEnqf','reqEnqp','reqEsp9','reqEsp12','reqEsp14','reqEsp23'],legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Número de requisições')
    plt.xlabel('Data')
    plt.title('Quantidade de Requisições de Outros Itens')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve7)
    pp.savefig()
    plt.close()

    fig8 = data2.groupby(['id'])['reqcustoCpgd','reqcustoCppq','reqcustoAlc96','reqcustoEst','reqcustoPAA',
    'reqcustoPAAA','reqcustoEnqf','reqcustoEnqp','reqcustoEsp9','reqcustoEsp12','reqcustoEsp14','reqcustoEsp23'].sum().plot(kind='bar',stacked=True,zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    #fig8 = data2.plot(x='id',y=['reqcustoCpgd','reqcustoCppq','reqcustoAlc96','reqcustoEst','reqcustoPAA',
    #'reqcustoPAAA','reqcustoEnqf','reqcustoEnqp','reqcustoEsp9','reqcustoEsp12','reqcustoEsp14','reqcustoEsp23'],
    #legend=False,kind='bar',zorder=3).legend(loc='center left', bbox_to_anchor=(1, 0.5))
    plt.ylabel('Custo [R$]')
    plt.xlabel('Data')
    plt.title('Custo Referente às Requisições de Outros Itens')
    plt.tight_layout()
    plt.grid(zorder=0)
    plt.savefig(nameArchieve8)
    pp.savefig()
    plt.close()



    