%{
extern int yyerror(char * str);
#include "y.tab.h"
%}
%%
"int"|"float"|"boolean"|"long"|"double"|"void"|"byte"|"char" return BUILTIN;

"," return COMMA;
";" return SC;
"\(" return op;
"\)" return cl;
"==" return eq1;
"=" return eq;
"\+"|"\-"|"\*"|"\/" return o;
"<"|">"|">="|"<=" return lt;
"do" return DO;
"if" return IF;
"else" return ELSE;
"while" return WHILE;
"then" return THEN;
"\n" return NL;
[a-zA-Z]+[a-zA-Z0-9]* return ID;
[0-9]+ return NUM;
"[]" return ARRAY;
%%

extern int yywrap()
{return 0;}
