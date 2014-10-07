--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

ALTER role postgres WITH password 'wasbook';

--
-- Name: books; Type: TABLE; Schema: public; Owner: wasbook; Tablespace: 
--

CREATE TABLE books (
    id character varying(10),
    title character varying(250),
    author character varying(250),
    publisher character varying(250),
    date character varying(250),
    price integer,
    comment character varying(400)
);


ALTER TABLE public.books OWNER TO wasbook;

--
-- Name: dummy; Type: TABLE; Schema: public; Owner: wasbook; Tablespace: 
--

CREATE TABLE dummy (
    foo text
);


ALTER TABLE public.dummy OWNER TO wasbook;

--
-- Name: test; Type: TABLE; Schema: public; Owner: wasbook; Tablespace: 
--

CREATE TABLE test (
    a character varying(30),
    b character varying(30),
    c character varying(30)
);


ALTER TABLE public.test OWNER TO wasbook;

--
-- Name: users; Type: TABLE; Schema: public; Owner: wasbook; Tablespace: 
--

CREATE TABLE users (
    id character varying(16),
    pwd character varying(16),
    mail character varying(32),
    name character varying(32),
    addr character varying(64),
    tel character varying(16)
);


ALTER TABLE public.users OWNER TO wasbook;

--
-- Data for Name: books; Type: TABLE DATA; Schema: public; Owner: wasbook
--

COPY books (id, title, author, publisher, date, price, comment) FROM stdin;
1001	夏の夜の夢	Shakespeare	青森書籍	1979/01	600	
1002	ハムレット	Shakespeare	岩手書房	1997/04	1260	
1003	マクベス	Shakespeare	山形出版	2001/05	1530	
1004	リア王	Shakespeare	秋田公論社	2004/07	1890	
\.


--
-- Data for Name: dummy; Type: TABLE DATA; Schema: public; Owner: wasbook
--

COPY dummy (foo) FROM stdin;
root:x:0:0:root:/root:/bin/bash
daemon:x:1:1:daemon:/usr/sbin:/bin/sh
bin:x:2:2:bin:/bin:/bin/sh
sys:x:3:3:sys:/dev:/bin/sh
sync:x:4:65534:sync:/bin:/bin/sync
games:x:5:60:games:/usr/games:/bin/sh
man:x:6:12:man:/var/cache/man:/bin/sh
lp:x:7:7:lp:/var/spool/lpd:/bin/sh
mail:x:8:8:mail:/var/mail:/bin/sh
news:x:9:9:news:/var/spool/news:/bin/sh
uucp:x:10:10:uucp:/var/spool/uucp:/bin/sh
proxy:x:13:13:proxy:/bin:/bin/sh
www-data:x:33:1000:www-data:/var/www:/bin/sh
backup:x:34:34:backup:/var/backups:/bin/sh
list:x:38:38:Mailing List Manager:/var/list:/bin/sh
irc:x:39:39:ircd:/var/run/ircd:/bin/sh
gnats:x:41:41:Gnats Bug-Reporting System (admin):/var/lib/gnats:/bin/sh
nobody:x:65534:65534:nobody:/nonexistent:/bin/sh
libuuid:x:100:101::/var/lib/libuuid:/bin/sh
syslog:x:101:103::/home/syslog:/bin/false
wasbook:x:1000:1000:wasbook,,,:/home/wasbook:/bin/bash
sshd:x:102:65534::/var/run/sshd:/usr/sbin/nologin
postgres:x:103:109:PostgreSQL administrator,,,:/var/lib/postgresql:/bin/bash
postfix:x:104:110::/var/spool/postfix:/bin/false
dovecot:x:105:112:Dovecot mail server,,,:/usr/lib/dovecot:/bin/false
alice:x:1001:1001:,,,:/home/alice:/bin/bash
bob:x:1002:1002:,,,:/home/bob:/bin/bash
carol:x:1003:1003:,,,:/home/carol:/bin/bash
down::0:0:,,,:/home/down:/home/down/down.sh
ip::1004:1005::/home/down:/home/down/ip.sh
\.


--
-- Data for Name: test; Type: TABLE DATA; Schema: public; Owner: wasbook
--

COPY test (a, b, c) FROM stdin;
aaa	bbb	ccc
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: wasbook
--

COPY users (id, pwd, mail, name, addr, tel) FROM stdin;
yamada	pass1	yamada@example.jp	山田太一	神奈川県川崎市	046-123-4567
tanaka	pass1	takana@example.com	山石京子	東京都港区三田	03-1234-5678
sato	password	sato@example.net	佐藤一志	神奈川県横浜市	045-123-4567
\.


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

