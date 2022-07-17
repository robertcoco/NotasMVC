create table notas (
    id int not null auto_increment,
    uuid varchar (255) not null unique,
    title varhcar(255) not null,
    content text not null,
    updated date not null,
    primary key (id)
);