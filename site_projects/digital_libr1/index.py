from tkinter import*
import tkinter.ttk as ttk
import tkinter.messagebox as tkMessageBox
#import connection
import os
import webbrowser
import sqlite3

root = Tk()
root.title("Digital Library")
#root.iconbitmap("favicon.ico") # delete to upload code
screen_width = root.winfo_screenwidth()
screen_height = root.winfo_screenheight()
width = 700
height = 300
x = (screen_width/2) - (width/2)
y = (screen_height/2) - (height/2)
root.geometry("800x600")
root.resizable(0, 0)

#=================================DB STRUCTURE===========================================
#dlibdb.db
#  |
#  ---> books.table
#         |
#         ---> [nome, autor, edicao, ano, estatistica, logistica, robotica, path, oid]

#==================================FUNCTIONS============================================
#Insert all books into treeview
def populateView():
    tree.delete(*tree.get_children())

    conn = sqlite3.connect("dlibdb.db")
    #Create cursor
    c = conn.cursor()
    c.execute("SELECT *, oid FROM books")
    records = c.fetchall()

    for data in records:
        tree.insert('', 'end', values=(data[8], data[0], 
        data[1], data[2], data[3], data[4], data[5], 
        data[6]),)
    #Commit changes
    conn.commit()

    #Close connection
    conn.close()

def populateViewStrSearch():
    tree.delete(*tree.get_children())

    conn = sqlite3.connect("dlibdb.db")
    #Create cursor
    c = conn.cursor()
    rdSearchvalue = rdSearch.get()

    if rdSearchvalue == 1:
        c.execute("SELECT *, oid FROM books WHERE nome LIKE '%" + textSearch.get() + "%'")
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()
    elif rdSearchvalue == 2:
        c.execute("SELECT *, oid FROM books WHERE autor LIKE '%" + textSearch.get() + "%'")
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()
    elif rdSearchvalue == 3:
        c.execute("SELECT *, oid FROM books WHERE ano LIKE '%" + textSearch.get() + "%'")
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()
    else:
        c.execute("SELECT *, oid FROM books")
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()




varcbEstat = IntVar()


varcbLog = IntVar()

varcbRob = IntVar()

def populateViewTagSearch():
    varlist = [varcbEstat.get(), varcbLog.get(), varcbRob.get()]
    biblio = ["estatistica=1", "logistica=1", "robotica=1",]

    #print([a*b for a,b in zip(varlist,biblio)])

    str_list = list(filter(None, [a*b for a,b in zip(varlist,biblio)]))
    #print(str_list)
    my_lst_str = ' AND '.join(map(str, str_list))
    #print(my_lst_str)

    if str_list == []:
        tree.delete(*tree.get_children())

        conn = sqlite3.connect("dlibdb.db")
        #Create cursor
        c = conn.cursor()
        c.execute("SELECT *, oid FROM books")
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()
    else:
        tree.delete(*tree.get_children())

        conn = sqlite3.connect("dlibdb.db")
        #Create cursor
        c = conn.cursor()

        c.execute("SELECT *, oid FROM books WHERE " + my_lst_str)
        records = c.fetchall()

        for data in records:
            tree.insert('', 'end', values=(data[8], data[0], 
            data[1], data[2], data[3], data[4], data[5], 
            data[6]),)
        #Commit changes
        conn.commit()

        #Close connection
        conn.close()
    



#Insert function for the new book function
def insertBook():
    #Create a database or connect to one
    conn = sqlite3.connect("dlibdb.db")
    #Create cursor
    c = conn.cursor()

    #update
    c.execute("INSERT INTO books VALUES (:nome, :autor, :edicao, :ano, :estatistica, :logistica, :robotica, :path)",
        {
            'nome' :name_newbook.get(),
            'autor' :author_newbook.get(),
            'edicao' :edition_newbook.get(),
            'ano' :year_newbook.get(),
            'estatistica' :statistics_newbook.get(),
            'logistica' :logistics_newbook.get(),
            'robotica' :robotics_newbook.get(),
            'path' :path_newbook.get()
        }
    )

    #Commit changes
    conn.commit()

    #Close connection
    conn.close()

    #close the window
    newbook.destroy()

#Create new book data
def newBookwindow():
    global newbook
    newbook = Tk()
    newbook.title("New book window")
    newbook.iconbitmap("favicon.ico") # delete to upload code
    newbook.geometry("400x300")

    #Create a database or connect to one
    conn = sqlite3.connect("dlibdb.db")
    #Create cursor
    c = conn.cursor()

    #Create global variables
    global name_newbook
    global author_newbook
    global edition_newbook
    global year_newbook
    global statistics_newbook
    global logistics_newbook
    global robotics_newbook
    global path_newbook

    #Create text boxes
    name_newbook = Entry(newbook, width=30)
    name_newbook.grid(row=0, column=1, padx=20, pady=(10,0))
    author_newbook = Entry(newbook, width=30)
    author_newbook.grid(row=1, column=1)
    edition_newbook = Entry(newbook, width=30)
    edition_newbook.grid(row=2, column=1)
    year_newbook = Entry(newbook, width=30)
    year_newbook.grid(row=3, column=1)
    statistics_newbook = Entry(newbook, width=30)
    statistics_newbook.grid(row=4, column=1)
    logistics_newbook = Entry(newbook, width=30)
    logistics_newbook.grid(row=5, column=1)
    robotics_newbook = Entry(newbook, width=30)
    robotics_newbook.grid(row=6, column=1)
    path_newbook = Entry(newbook, width=30)
    path_newbook.grid(row=7, column=1)
  
    #Create Text box labels
    name_label = Label(newbook, text="Book name")
    name_label.grid(row=0, column=0, pady=(10,0))
    author_label = Label(newbook, text="Author")
    author_label.grid(row=1, column=0)
    edition_label = Label(newbook, text="Edition")
    edition_label.grid(row=2, column=0)
    year_label = Label(newbook, text="Year")
    year_label.grid(row=3, column=0)
    statistics_label = Label(newbook, text="Statistics")
    statistics_label.grid(row=4, column=0)
    logistics_label = Label(newbook, text="Logistics")
    logistics_label.grid(row=5, column=0)
    robotics_label = Label(newbook, text="Robotics")
    robotics_label.grid(row=6, column=0)
    path_label = Label(newbook, text="Path")
    path_label.grid(row=7, column=0)



    #Create save button
    save_btn = Button(newbook, text="save newbook", command=insertBook)
    save_btn.grid(row=8, column=0, columnspan=2, padx=10, pady=10, ipadx=145)
    pathinst_label = Label(newbook, text="Path  must be: book_name.pdf")
    pathinst_label.grid(row=9, column=0, columnspan=2)


    #Commit changes
    conn.commit()

    #Close connection
    conn.close()

#Open file
def openFile():
    record_id_tempa = bookId_box.get()
    if record_id_tempa =="":
        tkMessageBox.showinfo("Info", "Choose an ID number")
    else:
        conn = sqlite3.connect("dlibdb.db")
        #Create cursor
        c = conn.cursor()
        record_id_temp1 = bookId_box.get()
        record_id_temp2 = int(record_id_temp1)
        record_id = record_id_temp2 - 1

        c.execute("SELECT * FROM books")
        records = c.fetchall()
        rel_path = "books\\" + records[record_id][7]

        script_dir_temp = os.path.abspath(__file__) #<-- absolute dir the script is in
        script_dir = script_dir_temp[:-8]
        # rel_path = "books\\2009_Book_Robotics.pdf"
        abs_file_path = script_dir + rel_path
        filePath = script_dir + rel_path
        webbrowser.open(filePath)

        #Commit changes
        conn.commit()

        #Close connection
        conn.close()

#Update function for the edit function
def update():
    #Create a database or connect to one
    conn = sqlite3.connect("dlibdb.db")
    #Create cursor
    c = conn.cursor()

    #update
    record_id = bookId_box.get()
    c.execute("""UPDATE books SET
        nome = :nomeup,
        autor = :autorup,
        edicao = :edicaoup,
        ano = :anoup,
        estatistica = :estatisticaup,
        logistica = :logisticaup,
        robotica = :roboticaup,
        path = :pathup

        WHERE oid = :oid""",
        {
        'nomeup':name_editor.get(),
        'autorup':author_editor.get(),
        'edicaoup':edition_editor.get(),
        'anoup':year_editor.get(),
        'estatisticaup':statistics_editor.get(),
        'logisticaup':logistics_editor.get(),
        'roboticaup':robotics_editor.get(),
        'pathup':path_editor.get(),
        'oid':record_id
        })

    #Commit changes
    conn.commit()

    #Close connection
    conn.close()

    #close the window
    editor.destroy()
    
#Create function
def edit():
    record_id_tempa = bookId_box.get()
    if record_id_tempa =="":
        tkMessageBox.showinfo("Info", "Choose an ID number")
    else:
        global editor
        editor = Tk()
        editor.title("Update window")
        editor.iconbitmap("favicon.ico") # delete to upload code
        editor.geometry("400x300")

        #Create a database or connect to one
        conn = sqlite3.connect("dlibdb.db")
        #Create cursor
        c = conn.cursor()

        #QUery the database
        record_id = bookId_box.get()
        c.execute("SELECT * FROM books WHERE oid="+record_id)
        records = c.fetchall()

        #Create global variables
        global name_editor
        global author_editor
        global edition_editor
        global year_editor
        global statistics_editor
        global logistics_editor
        global robotics_editor
        global path_editor

        #Create text boxes
        name_editor = Entry(editor, width=30)
        name_editor.grid(row=0, column=1, padx=20, pady=(10,0))
        author_editor = Entry(editor, width=30)
        author_editor.grid(row=1, column=1)
        edition_editor = Entry(editor, width=30)
        edition_editor.grid(row=2, column=1)
        year_editor = Entry(editor, width=30)
        year_editor.grid(row=3, column=1)
        statistics_editor = Entry(editor, width=30)
        statistics_editor.grid(row=4, column=1)
        logistics_editor = Entry(editor, width=30)
        logistics_editor.grid(row=5, column=1)
        robotics_editor = Entry(editor, width=30)
        robotics_editor.grid(row=6, column=1)
        path_editor = Entry(editor, width=30)
        path_editor.grid(row=7, column=1)
    
        #Create Text box labels
        name_label = Label(editor, text="Book name")
        name_label.grid(row=0, column=0, pady=(10,0))
        author_label = Label(editor, text="Author")
        author_label.grid(row=1, column=0)
        edition_label = Label(editor, text="Edition")
        edition_label.grid(row=2, column=0)
        year_label = Label(editor, text="Year")
        year_label.grid(row=3, column=0)
        statistics_label = Label(editor, text="Statistics")
        statistics_label.grid(row=4, column=0)
        logistics_label = Label(editor, text="Logistics")
        logistics_label.grid(row=5, column=0)
        robotics_label = Label(editor, text="Robotics")
        robotics_label.grid(row=6, column=0)
        path_label = Label(editor, text="Path")
        path_label.grid(row=7, column=0)

        #loop thru records
        for record in records:
            name_editor.insert(0,record[0])
            author_editor.insert(0,record[1])
            edition_editor.insert(0,record[2])
            year_editor.insert(0,record[3])
            statistics_editor.insert(0,record[4])
            logistics_editor.insert(0,record[5])
            robotics_editor.insert(0,record[6])
            path_editor.insert(0,record[7])

        #Create save button
        save_btn = Button(editor, text="save record", command=update)
        save_btn.grid(row=8, column=0, columnspan=2, padx=10, pady=10, ipadx=145)

        #Commit changes
        conn.commit()

        #Close connection
        conn.close()

def delete():
    record_id_tempa = bookId_box.get()
    if record_id_tempa =="":
        tkMessageBox.showinfo("Info", "Choose an ID number")
    else:
        #Create a database or connect to one
        conn = sqlite3.connect("dlibdb.db")
        #Create cursor
        c = conn.cursor()
        #Delete
        c.execute("DELETE from books WHERE oid=" + bookId_box.get())
        #Commit changes
        conn.commit()
        #Close connection
        conn.close()

#==================================FRAME==============================================
Top = Frame(root, width=700, height=50, bd=1, relief="groove")
Top.pack_propagate(0)
Top.pack(side=TOP)

Button_Group=Frame(root, width=700, height=200, bd=1, relief="sunken")
Button_Group.pack(side=TOP)
Button_Group.pack_propagate(0)
Buttons = Frame(Button_Group, width=350, height=200, bd=1, relief="sunken")
Buttons.pack(side=LEFT)
Buttons.pack_propagate(0)
Buttons1 = Frame(Button_Group, width=350, height=200, bd=1, relief="sunken")
Buttons1.pack(side=RIGHT)
Buttons1.pack_propagate(0)

Body = Frame(root, width=800, height=250, bd=8, relief="raise")
Body.pack_propagate(0)
Body.pack(side=TOP)

Footer = Frame(root, width=800, height=200, bd=8, relief="raise")
Footer.pack_propagate(0)
Footer.pack(side=BOTTOM)
Footer0 = Frame(Footer, width=160, height=100)
Footer0.pack_propagate(0)
Footer0.pack(side=LEFT)
Footer1 = Frame(Footer, width=160, height=100)
Footer1.pack_propagate(0)
Footer1.pack(side=LEFT)
Footer2 = Frame(Footer, width=160, height=100)
Footer2.pack_propagate(0)
Footer2.pack(side=LEFT)
Footer3 = Frame(Footer, width=160, height=100)
Footer3.pack_propagate(0)
Footer3.pack(side=LEFT)
Footer4 = Frame(Footer, width=160, height=100)
Footer4.pack_propagate(0)
Footer4.pack(side=LEFT)
Footer5 = Frame(Footer, width=160, height=100)
Footer5.pack_propagate(0)
Footer5.pack(side=LEFT)
#==================================INTRO=======================================

appDesc1_label = Label(Top, width=500, pady=3, text="This is my digital library. It stores data about my digital books into a database using sqlite3. Using this app")
appDesc1_label.pack(side=TOP)
appDesc2_label = Label(Top, width=500, pady=3,text="it is possible to check which books are available, open their PDF file, update, delete and create new records.")
appDesc2_label.pack(side=TOP)

#==================================STRING SEARCH=====================================
strSearch_label = Label(Buttons, width=500, pady=3, text="Search by string:", anchor='w')
strSearch_label.pack(side=TOP)
# Create radiobuttons
rdSearch = IntVar()
rdSearch.set("1")
Radiobutton(Buttons, text="Title", variable=rdSearch, value=1, pady=3).pack(side=TOP, anchor='w')
Radiobutton(Buttons, text="Author", variable=rdSearch, value=2, pady=3).pack(side=TOP, anchor='w')
Radiobutton(Buttons, text="Year", variable=rdSearch, value=3, pady=3).pack(side=TOP, anchor='w')
# Create auxiliary text
textSearch = Entry(Buttons, width=40)
textSearch.pack(side=TOP, anchor='w')
textSearch_label = Label(Buttons, text="Keyword", pady=3)
textSearch_label.pack(side=TOP, anchor='w')
# Create button
btn_display = Button(Buttons, width=15, text="Show results", command=populateViewStrSearch)
btn_display.pack(side=BOTTOM)

#==================================TAG SEARCH=====================================
tagSearch_label = Label(Buttons1, width=500, pady=3, text="Search by tag:", anchor='w')
tagSearch_label.pack(side=TOP)
# Create checknoxes
varcbEstat = IntVar()
cbEstat = Checkbutton(Buttons1, text="Statistics", variable=varcbEstat, pady=3)
cbEstat.pack(side=TOP, anchor='w')
varcbLog = IntVar()
cbLog = Checkbutton(Buttons1, text="Logistics", variable=varcbLog, pady=3)
cbLog.pack(side=TOP, anchor='w')
varcbRob = IntVar()
cbRob = Checkbutton(Buttons1, text="Robotics", variable=varcbRob, pady=3)
cbRob.pack(side=TOP, anchor='w')
# Create button
btn_display = Button(Buttons1, width=15, text="Show results", command=populateViewTagSearch)
btn_display.pack(side=BOTTOM)

#==================================LIST WIDGET========================================
scrollbary = Scrollbar(Body, orient=VERTICAL)
scrollbarx = Scrollbar(Body, orient=HORIZONTAL)
tree = ttk.Treeview(Body, columns=("Id","Name", "Author", "Editon", "Year", "Statistics", "Logistics", "Robotics"), selectmode="extended", height=300, yscrollcommand=scrollbary.set, xscrollcommand=scrollbarx.set)
scrollbary.config(command=tree.yview)
scrollbary.pack(side=RIGHT, fill=Y)
scrollbarx.config(command=tree.xview)
scrollbarx.pack(side=BOTTOM, fill=X)
tree.heading('Id', text="Id", anchor=W)
tree.heading('Name', text="Name", anchor=W)
tree.heading('Author', text="Author", anchor=W)
tree.heading('Editon', text="Editon", anchor=W)
tree.heading('Year', text="Year", anchor=W)
tree.heading('Statistics', text="Statistics", anchor=W)
tree.heading('Logistics', text="Logistics", anchor=W)
tree.heading('Robotics', text="Robotics", anchor=W)
tree.column('#0', stretch=NO, minwidth=0, width=0)
tree.column('#1', stretch=NO, minwidth=0, width=30)
tree.column('#2', stretch=NO, minwidth=0, width=250)
tree.column('#3', stretch=NO, minwidth=0, width=200)
tree.column('#4', stretch=NO, minwidth=0, width=50)
tree.column('#5', stretch=NO, minwidth=0, width=50)
tree.column('#6', stretch=NO, minwidth=0, width=100)
tree.column('#7', stretch=NO, minwidth=0, width=100)
tree.column('#8', stretch=NO, minwidth=0, width=100)
tree.pack()


#==================================CRUD========================================
bookId_label = Label(Footer0, width=15, pady=3, text="Select book ID")
bookId_label.pack(side=TOP)
bookId_box = Entry(Footer0, width=15)
bookId_box.pack(side=TOP)
btn_open = Button(Footer0, width=15, text="Open PDF", command=openFile)
btn_open.pack(side=TOP)

btn_edit_spc = Label(Footer1, width=15, pady=3, text="", anchor='w')
btn_edit_spc.pack(side=TOP)
btn_edit = Button(Footer1, width=15, text="Edit book", command=edit)
btn_edit.pack(side=TOP)

btn_show_spc = Label(Footer2, width=15, pady=3, text="", anchor='w')
btn_show_spc.pack(side=TOP)
btn_show = Button(Footer2, width=15, text="Show all", command=populateView)
btn_show.pack(side=TOP)

btn_add_spc = Label(Footer3, width=15, pady=3, text="", anchor='w')
btn_add_spc.pack(side=TOP)
btn_add = Button(Footer3, width=15, text="Add book", command=newBookwindow)
btn_add.pack(side=TOP)

btn_delete_spc = Label(Footer4, width=15, pady=3, text="", anchor='w')
btn_delete_spc.pack(side=TOP)
btn_delete = Button(Footer4, width=15, text="Delete book", command=delete)
btn_delete.pack(side=TOP)


#==================================INITIALIZATION=====================================

if __name__ == '__main__':
    root.mainloop()
   
