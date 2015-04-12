
CREATE TABLE os_stores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(80),
    category INT
);

CREATE TABLE os_schedules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    store_id INT, INDEX(store_id), FOREIGN KEY (store_id) REFERENCES os_stores(id),
    day TINYINT,
    start_time SMALLINT,
    end_time SMALLINT
);
