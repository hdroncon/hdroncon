from tkinter import *
import tkinter.messagebox
import csv
import matplotlib.pyplot as plt
import pandas as pd

root = Tk()
root.geometry('500x850')
root.title("Material de Consumo")

# Variáveis
var = IntVar()
c=StringVar() # Nome do Setor
var1= IntVar() # A1/A2 normal
var2= IntVar() # A3 normal
var3= IntVar() # A4 normal
var4= IntVar() # Encadernar 
sb_A1 = IntVar() # Qtde A1/A2 normal
sb_A3 = IntVar() # Qtde A3 normal
sb_A4 = IntVar() # Qtde A4 normal
sb_Enc = IntVar() # Qtde Encadernar 
var5= IntVar() # Nome do Setor
var6= IntVar() # Nome do Setor
var7= IntVar() # Nome do Setor
var8= IntVar() # Nome do Setor
var9= IntVar() # Nome do Setor
# Fim Variáveis


def infoPesos():
    lines = ['Cartuchos', '410040: 75 reais', '410041: 75 reais', '410042: 75 reais',
    '410043: 75 reais', '410066: 360 reais','410067: 360 reais', '410068: 195 reais',
    '410069: 259,60 reais','','Copos','409346: 0,04 reais','4410073: 0,04 reais','',
    'Papel','409984: 52,72 reais','409350: 21,39 reais','409995: 49,32 reais','','Diversos',
    '400180: 10 reais', '409022: 12,70 reais', '408108: 5,60 reais', '410039: 14,25 reais',
    '409373: 0,50 reais', '409374: 0,50 reais']
    tkinter.messagebox.showinfo('Pesos para cálculo', "\n".join(lines))

def plotdata():
    data = pd.read_csv('material_auxilio.csv')

    fig1 = data.groupby('setor').tipoA1.sum().plot(legend=True,kind='bar')
    plt.ylabel('Número de requisições')
    plt.xlabel('Setor')
    plt.title('tipoA1')
    plt.tight_layout()
    plt.savefig('fig1')
    plt.close()

    fig1 = data.groupby('setor').tipoA4.sum().plot(legend=True,kind='bar')
    plt.ylabel('Número de requisições')
    plt.xlabel('Setor')
    plt.title('tipoA4')
    plt.tight_layout()
    plt.savefig('fig2')
    plt.close()


def database():
    #val1 = int(entry_1.get())
    #print(val1)
    #peso_a4 = int('1000')
    #con_mult = val1 * peso_a4
    with open('material_auxilio.csv', 'a') as f:
            w=csv.writer(f, lineterminator = '\n')
            w.writerow([c.get(),var1.get(),var2.get(),var3.get(),var4.get(),sb_A1.get()
            #var2.get(),var3.get(),var4.get(),sb_A1.get(),sb_A2.get()
            ])
   
   
             
label_title = Label(root, text="CONTROLE DE MATERIAL",width=30,font=("bold", 15))
label_title.place(x=90,y=45)

#label_subtitle = Label(root, text="REQUISIÇÕES EXTERNAS",width=20,font=("bold", 10))
#label_subtitle.place(x=180,y=85)

botaoInfo = Button(root,text = "Informações", command = infoPesos).place(x=220,y=100)

label_setor = Label(root, text="Setor",width=20,font=("bold", 10))
label_setor.place(x=100,y=155)
list_setor = ['Almox. Central','Almox. Comercial','AST','Auto Controle','Caldeiraria','Compras',
            'Diretoria','Eletrônica','Eng, Software','Fornecedor','Montagem Elétrica', 'Montagem Mecânica',
            'Outros','PCP','Pintura','Processo','Projeto','Qualidade','Recebimento', 'Terceirização', 'Transporte',
            'Usinagem', 'Vendas'];
droplist=OptionMenu(root,c, *list_setor)
droplist.config(width=20)
c.set('clique para escolher') 
droplist.place(x=220,y=150)


#label_subtitle = Label(root, text="Requisições internas",width=20,font=("bold", 10))
#label_subtitle.place(x=150,y=160)


label_tipo = Label(root, text="Tipo",width=20,font=("bold", 10))
label_tipo.place(x=10,y=200)
Checkbutton(root, text="A1/A2", variable=var1).place(x=120,y=200)
#Checkbutton(root, text="A2", variable=varXXXX).place(x=170,y=200)
Checkbutton(root, text="A3", variable=var2).place(x=220,y=200)
Checkbutton(root, text="A4", variable=var3).place(x=270,y=200)
Checkbutton(root, text="Encadernar", variable=var4).place(x=320,y=200)

label_Qtdevalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_Qtdevalue.place(x=10,y=235)
sb_A1 = Spinbox(root, from_=0, to=100, increment=1,width=3)
sb_A1.place(x=122,y=235)
#sb_A2 = Spinbox(root, from_=0, to=100, increment=1,width=3).place(x=172,y=235)
sb_A3 = Spinbox(root, from_=0, to=100, increment=1,width=3)
sb_A3.place(x=222,y=235)
sb_A4 = Spinbox(root, from_=0, to=100, increment=1,width=3)
sb_A4.place(x=272,y=235)
sb_Enc = Spinbox(root, from_=0, to=100, increment=1,width=3)
sb_Enc.place(x=322,y=235)


label_subtitle = Label(root, text="EXCLUSIVO PROJETO",width=25,font=("bold", 10))
label_subtitle.place(x=150,y=290)

label_tipo = Label(root, text="Pacote/Rolo",width=20,font=("bold", 10))
label_tipo.place(x=1,y=310)
Checkbutton(root, text="A1/A2", variable=var7).place(x=120,y=310)
Checkbutton(root, text="A3", variable=var8).place(x=180,y=310)
Checkbutton(root, text="A4", variable=var9).place(x=230,y=310)

label_QtdeBvalue = Label(root, text="Qtde",width=20,font=("bold", 10))
label_QtdeBvalue.place(x=10,y=345)
sbp_A1 = Spinbox(root, from_=0, to=100, increment=1,width=3).place(x=125,y=345)
sbp_A3 = Spinbox(root, from_=0, to=100, increment=1,width=3).place(x=180,y=345)
sbp_A4 = Spinbox(root, from_=0, to=100, increment=1,width=3).place(x=235,y=345)

label_tipoB = Label(root, text="Pacote/Rolo",width=20,font=("bold", 10))
label_tipoB.place(x=1,y=310)
Checkbutton(root, text="A1/A2", variable=var6).place(x=120,y=310)








Button(root, text='Upload',width=20,bg='brown',fg='white',command=database).place(x=180,y=380)
#Button(root, text='Submit',width=20,bg='brown',fg='white',command=sub).place(x=180,y=420)

label_pesoa4 = Label(root, text="Peso A4 = 0.01",width=20,font=("bold", 10))
label_pesoa4.place(x=70,y=450)

Button(root, text='CSV',width=20,bg='brown',fg='white',command=plotdata).place(x=180,y=530)
#Button(root, text='Submit',width=20,bg='brown',fg='white',command=sub).place(x=180,y=420)

#label_1 = Label(root, text="FullName",width=20,font=("bold", 10))
#label_1.place(x=80,y=130)
#entry_1 = Entry(root,textvar=Fullname)
#entry_1.place(x=240,y=130)

#label_2 = Label(root, text="Email",width=20,font=("bold", 10))
#label_2.place(x=68,y=180)
#entry_2 = Entry(root,textvar=Email)
#entry_2.place(x=240,y=180)

#label_3 = Label(root, text="Gender",width=20,font=("bold", 10))
#label_3.place(x=70,y=230)
#Radiobutton(root, text="Male",padx = 5, variable=var, value=1).place(x=235,y=230)
#Radiobutton(root, text="Female",padx = 20, variable=var, value=2).place(x=290,y=230)


#label_4 = Label(root, text="Programming",width=20,font=("bold", 10))
#label_4.place(x=85,y=330)
#var2= IntVar()
#Checkbutton(root, text="java", variable=var1).place(x=235,y=330)
#Checkbutton(root, text="python", variable=var2).place(x=290,y=330)



root.mainloop()