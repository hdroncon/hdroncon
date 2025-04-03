from tkinter import *
import sys
import os
import tkinter.messagebox
import sqlite3
import csv
from datetime import datetime
from reportlab.lib.enums import TA_JUSTIFY
from reportlab.lib.pagesizes import letter
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Image
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.units import inch

root = Tk()
root.geometry('500x950')
root.title("Material de Consumo")

# Variáveis
c =StringVar() # Nome do Setor
tipoRolo = IntVar() # A1/A2 normal
tipoBand = IntVar() # A3 normal
tipoA4 = IntVar() # A4 normal
tipoEnc = IntVar() # Encadernar 
qtdeRolo = IntVar() # Qtde A1/A2 normal
qtdeBand = IntVar() # Qtde A3 normal
qtdeA4 = IntVar() # Qtde A4 normal
qtdeEnc = IntVar() # Qtde Encadernar 
reqRolo = IntVar() # Requisição de rolo 
reqqtdeRolo = IntVar() # Qtde rolo requisitado
reqA3 = IntVar() # Requisição de A3
reqqtdeA3 = IntVar() # Qtde A3 requisitado
reqA4 = IntVar() # Requisição de A4
reqqtdeA4 = IntVar() # Qtde A4 requisitado
reqHP200pr = IntVar() # Cartucho preto HP200 410040
reqqtdeHP200pr = IntVar() # Quantidade cartucho preto HP200 410040
reqHP200ci = IntVar() # Cartucho ciano HP200 410041
reqqtdeHP200ci = IntVar() # Quantidade cartucho ciano HP200 410041
reqHP200mg = IntVar() # Cartucho magenta HP200 410042
reqqtdeHP200mg = IntVar() # Quantidade cartucho magenta HP200 410042
reqHP200am = IntVar() # Cartucho amarelo HP200 410043
reqqtdeHP200am = IntVar() # Quantidade cartucho amarelo HP200 410043
reqPlotpr = IntVar() # Cartucho preto Ploter 410066
reqqtdePlotpr = IntVar() # Quantidade cartucho preto Ploter 410066
reqPlotci = IntVar() # Cartucho ciano Ploter 410067
reqqtdePlotci = IntVar() # Quantidade cartucho ciano Ploter 410067
reqPlotmg = IntVar() # Cartucho magenta Ploter 410068
reqqtdePlotmg = IntVar() # Quantidade cartucho magenta Ploter 410068
reqPlotam = IntVar() # Cartucho amarelo Ploter 410069
reqqtdePlotam = IntVar() # Quantidade cartucho amarelo Ploter 410069
reqHP1606pr = IntVar() # Cartucho HP1606 410035
reqqtdeHP1606pr = IntVar() # Quantidade cartucho HP1606 410035
reqCpgd = IntVar() # Copo grande 409346
reqqtdeCpgd = IntVar() # Quantidade copo grande 409346
reqCppq = IntVar() # Copo pequeno 410073
reqqtdeCppq = IntVar() # Quantidade copo pequeno 410073
reqAlc96 = IntVar() # Alcool 96 400180
reqqtdeAlc96 = IntVar() # Quantidade alcool 96 400180
reqEst = IntVar() # Estilete grande 409022
reqqtdeEst = IntVar() # Quantidade estilete grande 409022
reqPAA = IntVar() # Pilha AA 408108
reqqtdePAA = IntVar() # Quantidade pilha AA 408108
reqPAAA = IntVar() # Pilha AAA 410039
reqqtdePAAA = IntVar() # Quantidade pilha AAA 410039
reqEnqf = IntVar() # Capa fumê 409373
reqqtdeEnqf = IntVar() # Quantidade capa fumê 409373
reqEnqp = IntVar() # Capa fumê 409374
reqqtdeEnqp = IntVar() # Quantidade capa fumê 409374
reqEsp9 = IntVar() # Espiral 9mm 410007
reqqtdeEsp9 = IntVar() # Quantidade espiral 9mm 410007
reqEsp12 = IntVar() # Espiral 12mm 409372
reqqtdeEsp12 = IntVar() # Quantidade espiral 12mm 409372
reqEsp14 = IntVar() # Espiral 14mm 409991
reqqtdeEsp14 = IntVar() # Quantidade espiral 14mm 409991
reqEsp23 = IntVar() # Espiral 23mm 410017
reqqtdeEsp23 = IntVar() # Quantidade espiral 23mm 410017

# Fim Variáveis


def infoInstr():
    lines = ['Instrução','','1)']
    tkinter.messagebox.showinfo('Pesos para cálculo', "\n".join(lines))

def infoPesos():
    lines = ['Cartuchos','410035 (HP1606 preto): 65 reais','410040 (HP200 preto): 75 reais', 
    '410041 (HP200 preto): 75 reais', '410042: 75 reais',
    '410043: 75 reais', '410066: 360 reais','410067: 360 reais', '410068: 195 reais',
    '410069: 259,60 reais','','Copos','409346: 0,04 reais','410073: 0,04 reais','',
    'Papel','409984: 52,72 reais','409350: 21,39 reais','409995: 49,32 reais','','Diversos',
    '400180: 10 reais', '409022: 12,70 reais', '408108: 5,60 reais', '410039: 14,25 reais',
    '409373: 0,50 reais', '409374: 0,50 reais']
    tkinter.messagebox.showinfo('Pesos para cálculo', "\n".join(lines))

def plotdata():
    os.system('sub.py')
    lines = ['Graficos gerados com sucesso!','', '1) instruções']
    tkinter.messagebox.showinfo('Atenção', "\n".join(lines))

def reqreport():
    # Cálculos de material auxiliar
    val5 = int(reqqtdeRolo.get())
    peso_reqrolo = 49.32
    reqcustoRolo = round(val5 * peso_reqrolo,2)
    val6 = int(reqqtdeA3.get())
    peso_reqa3 = 52.72
    reqcustoA3 = round(val6 * peso_reqa3,2)
    val7 = int(reqqtdeA4.get())
    peso_reqa4 = 21.39
    reqcustoA4 = round(val7 * peso_reqa4,2)
    val8 = int(reqqtdeCpgd.get())
    peso_reqcpgd = 0.04
    reqcustoCpgd = round(val8 * peso_reqcpgd,2)
    val9 = int(reqqtdeCppq.get())
    peso_reqcppq = 0.04
    reqcustoCppq = round(val9 * peso_reqcppq,2)
    val10 = int(reqqtdeHP200pr.get())
    peso_reqHP200pr = 75
    reqcustoHP200pr = round(val10 * peso_reqHP200pr,2)
    val11 = int(reqqtdeHP200ci.get())
    peso_reqHP200ci = 75
    reqcustoHP200ci = round(val11 * peso_reqHP200ci,2)
    val12 = int(reqqtdeHP200mg.get())
    peso_reqHP200mg = 75
    reqcustoHP200mg = round(val12 * peso_reqHP200mg,2)
    val13 = int(reqqtdeHP200am.get())
    peso_reqHP200am = 75
    reqcustoHP200am = round(val13 * peso_reqHP200am,2)
    val14 = int(reqqtdePlotpr.get())
    peso_reqPlotpr = 360
    reqcustoPlotpr = round(val14 * peso_reqPlotpr,2)
    val15 = int(reqqtdePlotci.get())
    peso_reqPlotci = 360
    reqcustoPlotci = round(val15 * peso_reqPlotci,2)
    val16 = int(reqqtdePlotmg.get())
    peso_reqPlotmg = 259.60
    reqcustoPlotmg = round(val16 * peso_reqPlotmg,2)
    val17 = int(reqqtdePlotam.get())
    peso_reqPlotam = 195
    reqcustoPlotam = round(val17 * peso_reqPlotam,2)
    val18 = int(reqqtdeHP1606pr.get())
    peso_reqHP1606pr = 65
    reqcustoHP1606pr = round(val18 * peso_reqHP1606pr,2)
    val19 = int(reqqtdeAlc96.get())
    peso_reqAlc96 = 10
    reqcustoAlc96 = round(val19 * peso_reqAlc96,2)
    val20 = int(reqqtdeEst.get())
    peso_reqEst = 12.70
    reqcustoEst = round(val20 * peso_reqEst,2)
    val21 = int(reqqtdePAA.get())
    peso_reqPAA = 5.60
    reqcustoPAA = round(val21 * peso_reqPAA,2)
    val22 = int(reqqtdePAAA.get())
    peso_reqPAAA = 14.25
    reqcustoPAAA = round(val22 * peso_reqPAAA,2)
    val23 = int(reqqtdeEnqf.get())
    peso_reqEnqf = 0.50
    reqcustoEnqf = round(val23 * peso_reqEnqf,2)
    val24 = int(reqqtdeEnqp.get())
    peso_reqEnqp = 0.50
    reqcustoEnqp = round(val24 * peso_reqEnqp,2)
    val25 = int(reqqtdeEsp9.get())
    peso_reqEsp9 = 0.12
    reqcustoEsp9 = round(val25 * peso_reqEsp9,2)
    val26 = int(reqqtdeEsp12.get())
    peso_reqEsp12 = 0.16
    reqcustoEsp12 = round(val26 * peso_reqEsp12,2)
    val27 = int(reqqtdeEsp14.get())
    peso_reqEsp14 = 0.21
    reqcustoEsp14 = round(val27 * peso_reqEsp14,2)
    val28 = int(reqqtdeEsp23.get())
    peso_reqEsp23 = 0.4
    reqcustoEsp23 = round(val28 * peso_reqEsp23,2)
    reqcustoTotal = round(reqcustoA3+reqcustoA4+reqcustoAlc96+reqcustoCpgd+
                        reqcustoCppq+reqcustoEnqf+reqcustoEnqp+reqcustoEsp12+
                        reqcustoEsp14+reqcustoEsp23+reqcustoEsp9+reqcustoEst+
                        reqcustoHP1606pr+reqcustoHP200am+reqcustoHP200ci+
                        reqcustoHP200mg+reqcustoHP200pr+reqcustoPAA+reqcustoPAAA+
                        reqcustoPlotam+reqcustoPlotci+reqcustoPlotmg+reqcustoPlotpr+
                        reqcustoRolo,2)
    #Cálculos de requisições
    formatted_time = datetime.today().strftime('%d/%m/%Y - %H:%M:%S')
    with open('requisicao.csv', 'a') as f:
            w=csv.writer(f, lineterminator = '\n')
            w.writerow([formatted_time,
                        reqRolo.get(),reqqtdeRolo.get(),reqcustoRolo,
                        reqA3.get(),reqqtdeA3.get(),reqcustoA3,
                        reqA4.get(),reqqtdeA4.get(),reqcustoA4,
                        reqCpgd.get(),reqqtdeCpgd.get(),reqcustoCpgd,
                        reqCppq.get(),reqqtdeCppq.get(),reqcustoCppq,
                        reqHP200pr.get(),reqqtdeHP200pr.get(),reqcustoHP200pr,
                        reqHP200ci.get(),reqqtdeHP200ci.get(),reqcustoHP200ci,
                        reqHP200mg.get(),reqqtdeHP200mg.get(),reqcustoHP200mg,
                        reqHP200am.get(),reqqtdeHP200am.get(),reqcustoHP200am,
                        reqPlotpr.get(),reqqtdePlotpr.get(),reqcustoPlotpr,
                        reqPlotci.get(),reqqtdePlotci.get(),reqcustoPlotci,
                        reqPlotmg.get(),reqqtdePlotmg.get(),reqcustoPlotmg,
                        reqPlotam.get(),reqqtdePlotam.get(),reqcustoPlotam,
                        reqHP1606pr.get(),reqqtdeHP1606pr.get(),reqcustoHP1606pr,
                        reqAlc96.get(),reqqtdeAlc96.get(),reqcustoAlc96,
                        reqEst.get(),reqqtdeEst.get(),reqcustoEst,
                        reqPAA.get(),reqqtdePAA.get(),reqcustoPAA,
                        reqPAAA.get(),reqqtdePAAA.get(),reqcustoPAAA,
                        reqEnqf.get(),reqqtdeEnqf.get(),reqcustoEnqf,
                        reqEnqp.get(),reqqtdeEnqp.get(),reqcustoEnqp,
                        reqEsp9.get(),reqqtdeEsp9.get(),reqcustoEsp9,
                        reqEsp12.get(),reqqtdeEsp12.get(),reqcustoEsp12,
                        reqEsp14.get(),reqqtdeEsp14.get(),reqcustoEsp14,
                        reqEsp23.get(),reqqtdeEsp23.get(),reqcustoEsp23,
                        reqcustoTotal
            ])
    
    lines = ['Requisição gerada com sucesso!','','Imprima o arquivo requisicao.pdf antes de gerar outra requisição.']
    tkinter.messagebox.showinfo('Aviso', "\n".join(lines))
    actual_time = datetime.today().strftime('%d.%m.%Y...%H.%M.%S')

    nameArchievereq = 'arquivos/requisicoes/' + actual_time + '.requisicao.pdf'
    doc = SimpleDocTemplate(nameArchievereq,pagesize=letter,
                            rightMargin=72,leftMargin=72,
                            topMargin=72,bottomMargin=18)
    Story=[]
    formatted_time = datetime.today().strftime('%d/%m/%Y - %H:%M:%S')
    styles=getSampleStyleSheet()
    styles.add(ParagraphStyle(name='Justify', alignment=TA_JUSTIFY))
    ptext = '<font size="12">%s</font>' % formatted_time
    Story.append(Paragraph(ptext, styles["Normal"]))
    Story.append(Spacer(1, 12))
    styles=getSampleStyleSheet()
    styles.add(ParagraphStyle(name='Justify', alignment=TA_JUSTIFY))
    Story.append(Spacer(1, 12))
    ptext = '<font size="12">Requisição:</font>'
    Story.append(Paragraph(ptext, styles["Normal"]))
    Story.append(Spacer(1, 10))
    ptext = '<font size="12">Código: 409995. Quantidade: %s. Custo: R$ %s.</font>' % (val5, reqcustoRolo)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409984. Quantidade: %s. Custo: R$ %s.</font>' % (val6, reqcustoA3)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409350. Quantidade: %s. Custo: R$ %s.</font>' % (val7, reqcustoA4)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409346. Quantidade: %s. Custo: R$ %s.</font>' % (val8, reqcustoCpgd)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410073. Quantidade: %s. Custo: R$ %s.</font>' % (val9, reqcustoCppq)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410040. Quantidade: %s. Custo: R$ %s.</font>' % (val10, reqcustoHP200pr)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410041. Quantidade: %s. Custo: R$ %s.</font>' % (val11, reqcustoHP200ci)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410042. Quantidade: %s. Custo: R$ %s.</font>' % (val12, reqcustoHP200mg)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410043. Quantidade: %s. Custo: R$ %s.</font>' % (val13, reqcustoHP200am)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410066. Quantidade: %s. Custo: R$ %s.</font>' % (val14, reqcustoPlotpr)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410067. Quantidade: %s. Custo: R$ %s.</font>' % (val15, reqcustoPlotci)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410068. Quantidade: %s. Custo: R$ %s.</font>' % (val17, reqcustoPlotam)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410069. Quantidade: %s. Custo: R$ %s.</font>' % (val16, reqcustoPlotmg)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410035. Quantidade: %s. Custo: R$ %s.</font>' % (val18, reqcustoHP1606pr)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 400180. Quantidade: %s. Custo: R$ %s.</font>' % (val19, reqcustoAlc96)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409022. Quantidade: %s. Custo: R$ %s.</font>' % (val20, reqcustoEst)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 408108. Quantidade: %s. Custo: R$ %s.</font>' % (val21, reqcustoPAA)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410039. Quantidade: %s. Custo: R$ %s.</font>' % (val22, reqcustoPAAA)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409373. Quantidade: %s. Custo: R$ %s.</font>' % (val23, reqcustoEnqf)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409374. Quantidade: %s. Custo: R$ %s.</font>' % (val24, reqcustoEnqp)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410007. Quantidade: %s. Custo: R$ %s.</font>' % (val25, reqcustoEsp9)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409372. Quantidade: %s. Custo: R$ %s.</font>' % (val26, reqcustoEsp12)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 409991. Quantidade: %s. Custo: R$ %s.</font>' % (val27, reqcustoEsp14)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 8))
    ptext = '<font size="12">Código: 410017. Quantidade: %s. Custo: R$ %s.</font>' % (val28, reqcustoEsp23)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 25))
    ptext = '<font size="12">Custo total: R$ %s</font>' % (reqcustoTotal)
    Story.append(Paragraph(ptext, styles["Justify"]))
    Story.append(Spacer(1, 25))
    doc.build(Story)

def database():
    # Cálculos de material auxiliar
    val1 = int(qtdeRolo.get())
    peso_rolo = 0.72
    custoRolo = round(val1 * peso_rolo,2)
    val2 = int(qtdeBand.get())
    peso_band = 0.11
    custoBand = round(val2 * peso_band,2)
    val3 = int(qtdeA4.get())
    peso_a4 = 0.04
    custoA4 = round(val3 * peso_a4,2)
    val4 = int(qtdeEnc.get())
    peso_enc = 0.5 + 0.5 + 0.3
    custoEnc = round(val4 * peso_enc,2)
    custoTotal = round(custoRolo+custoEnc+custoBand+custoA4,2)
    #Cálculos de requisições

    with open('material_auxilio.csv', 'a') as f:
            w=csv.writer(f, lineterminator = '\n')
            w.writerow([c.get(),
                        tipoRolo.get(),qtdeRolo.get(),custoRolo,
                        tipoBand.get(),qtdeBand.get(),custoBand,
                        tipoA4.get(),qtdeA4.get(),custoA4,
                        tipoEnc.get(),qtdeEnc.get(),custoEnc,
                        custoTotal
            ])

    lines = ['Despesa gerada com sucesso!']
    tkinter.messagebox.showinfo('Aviso', "\n".join(lines))
     
             
label_title = Label(root, text="Controle Setor Xerox",width=30,font=("bold", 15))
label_title.place(x=90,y=20)


botaoInfo = Button(root,text = "Informações", command = infoPesos).place(x=330,y=60)
botaoInfo = Button(root,text = "Instruções", command = infoInstr).place(x=110,y=60)

label_subtitle = Label(root, text="Requisições Externas",width=25,font=("bold", 10))
label_subtitle.place(x=150,y=100)

list_setor = ['Almox. Central','Almox. Comercial','AST','Auto Controle','Caldeiraria','Compras',
            'Diretoria','Eletronica','Eng Software','Fornecedor','Montagem Eletrica', 'Montagem Mecanica',
            'Outros','PCP','Pintura','Processo','Projeto','Qualidade','Recebimento', 'Terceirizacao', 'Transporte',
            'Usinagem', 'Vendas'];
droplist=OptionMenu(root,c, *list_setor)
droplist.config(width=20)
c.set('Escolha o setor') 
droplist.place(x=170,y=120)


label_tipo = Label(root, text="Tipo",width=20,font=("bold", 10))
label_tipo.place(x=10,y=155)
Checkbutton(root, text="A1/A2", variable=tipoRolo).place(x=120,y=155)
Checkbutton(root, text="A3", variable=tipoBand).place(x=220,y=155)
Checkbutton(root, text="A4", variable=tipoA4).place(x=270,y=155)
Checkbutton(root, text="Encadernar", variable=tipoEnc).place(x=320,y=155)


label_QtdeAvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeAvalue.place(x=10,y=183)
qtdeRolo = Spinbox(root, from_=0, to=100, increment=1,width=3)
qtdeRolo.place(x=124,y=183)
qtdeBand = Spinbox(root, from_=0, to=100, increment=1,width=3)
qtdeBand.place(x=224,y=183)
qtdeA4 = Spinbox(root, from_=0, to=100, increment=1,width=3)
qtdeA4.place(x=274,y=183)
qtdeEnc = Spinbox(root, from_=0, to=100, increment=1,width=3)
qtdeEnc.place(x=324,y=183)

Button(root, text='Gerar despesa',width=20,bg='#1c6b43',fg='white',command=database).place(x=177,y=220)

####################################################################################

label_subtitle = Label(root, text="Requisições Internas",width=25,font=("bold", 10))
label_subtitle.place(x=150,y=290)

label_tipo = Label(root, text="Pacote/Rolo",width=20,font=("bold", 10))
label_tipo.place(x=1,y=316)
Checkbutton(root, text="A1/A2", variable=reqRolo).place(x=120,y=316)
Checkbutton(root, text="A3", variable=reqA3).place(x=180,y=316)
Checkbutton(root, text="A4", variable=reqA4).place(x=230,y=316)
label_QtdeBvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeBvalue.place(x=10,y=345)
reqqtdeRolo = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeRolo.place(x=125,y=345)
reqqtdeA3 = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeA3.place(x=180,y=345)
reqqtdeA4 = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeA4.place(x=235,y=345)

label_tipo = Label(root, text="Pacote Copos",width=18,font=("bold", 10))
label_tipo.place(x=1,y=380)
Checkbutton(root, text="200ml", variable=reqCpgd).place(x=120,y=380)
Checkbutton(root, text="80ml", variable=reqCppq).place(x=180,y=380)
label_QtdeBvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeBvalue.place(x=10,y=408)
reqqtdeCpgd = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeCpgd.place(x=125,y=408)
reqqtdeCppq = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeCppq.place(x=185,y=408)

label_tipo = Label(root, text="Cart. HP200",width=18,font=("bold", 10))
label_tipo.place(x=1,y=443)
Checkbutton(root, text="Preto", variable=reqHP200pr).place(x=120,y=443)
Checkbutton(root, text="Ciano", variable=reqHP200ci).place(x=180,y=443)
Checkbutton(root, text="Magenta", variable=reqHP200mg).place(x=240,y=443)
Checkbutton(root, text="Amarelo", variable=reqHP200am).place(x=315,y=443)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=471)
reqqtdeHP200pr = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeHP200pr.place(x=125,y=471)
reqqtdeHP200ci = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeHP200ci.place(x=185,y=471)
reqqtdeHP200mg = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeHP200mg.place(x=245,y=471)
reqqtdeHP200am = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeHP200am.place(x=320,y=471)

label_tipo = Label(root, text="Cart. Ploter",width=18,font=("bold", 10))
label_tipo.place(x=1,y=506)
Checkbutton(root, text="Preto", variable=reqPlotpr).place(x=120,y=506)
Checkbutton(root, text="Ciano", variable=reqPlotci).place(x=180,y=506)
Checkbutton(root, text="Magenta", variable=reqPlotmg).place(x=240,y=506)
Checkbutton(root, text="Amarelo", variable=reqPlotam).place(x=315,y=506)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=534)
reqqtdePlotpr = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePlotpr.place(x=125,y=534)
reqqtdePlotci = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePlotci.place(x=185,y=534)
reqqtdePlotmg = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePlotmg.place(x=245,y=534)
reqqtdePlotam = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePlotam.place(x=320,y=534)

label_tipo = Label(root, text="Cart. HP1606",width=18,font=("bold", 10))
label_tipo.place(x=1,y=569)
Checkbutton(root, text="Preto", variable=reqHP1606pr).place(x=120,y=569)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=597)
reqqtdeHP1606pr = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeHP1606pr.place(x=125,y=597)

label_tipo = Label(root, text="Outros",width=20,font=("bold", 10))
label_tipo.place(x=1,y=632)
Checkbutton(root, text="Álcool 96", variable=reqAlc96).place(x=120,y=632)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=660)
reqqtdeAlc96 = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeAlc96.place(x=125,y=660)
Checkbutton(root, text="Estilete", variable=reqEst).place(x=195,y=632)
reqqtdeEst = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdeEst.place(x=198,y=660)
Checkbutton(root, text="Pilha AA", variable=reqPAA).place(x=257,y=632)
reqqtdePAA = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePAA.place(x=261,y=660)
Checkbutton(root, text="Pilha AAA", variable=reqPAAA).place(x=330,y=632)
reqqtdePAAA = Spinbox(root, from_=0, to=100, increment=1,width=3)
reqqtdePAAA.place(x=335,y=660)

label_tipo = Label(root, text="Capa",width=23,font=("bold", 10))
label_tipo.place(x=1,y=695)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=723)
Checkbutton(root, text="Fumê", variable=reqEnqf).place(x=120,y=695)
reqqtdeEnqf = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEnqf.place(x=125,y=723)
Checkbutton(root, text="Preta", variable=reqEnqp).place(x=205,y=695)
reqqtdeEnqp = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEnqp.place(x=209,y=723)

label_tipo = Label(root, text="Espiral",width=22,font=("bold", 10))
label_tipo.place(x=1,y=758)
label_QtdeCvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeCvalue.place(x=10,y=786)
Checkbutton(root, text="9mm", variable=reqEsp9).place(x=120,y=758)
reqqtdeEsp9 = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEsp9.place(x=125,y=786)
Checkbutton(root, text="12mm", variable=reqEsp12).place(x=180,y=758)
reqqtdeEsp12 = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEsp12.place(x=185,y=786)
Checkbutton(root, text="14mm", variable=reqEsp14).place(x=240,y=758)
reqqtdeEsp14 = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEsp14.place(x=245,y=786)

Checkbutton(root, text="23mm", variable=reqEsp23).place(x=300,y=758)
reqqtdeEsp23 = Spinbox(root, from_=0, to=1000, increment=1,width=3)
reqqtdeEsp23.place(x=305,y=786)

Button(root, text='Gerar Requisição',width=20,bg='#1c6b43',fg='white',command=reqreport).place(x=177,y=830)
#Button(root, text='Submit',width=20,bg='brown',fg='white',command=sub).place(x=180,y=420)

Button(root, text='Gráficos',width=20,bg='#8a1111',fg='white',command=plotdata).place(x=177,y=900)
#Button(root, text='Submit',width=20,bg='brown',fg='white',command=sub).place(x=180,y=420)


root.mainloop()
