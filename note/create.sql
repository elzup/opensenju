
CREATE TABLE os_stores (
    id int AUTO_INCREMENT,
    name varchar(80),
    category int
);

CREATE TABLE os_schedules (
    id int AUTO_INCREMENT,
    store_id int, index(store_id), foreign key(store_id) references os_stores(store_id),
    tiny int
);
