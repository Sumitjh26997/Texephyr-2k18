%{
#include<stdio.h>
extern int yylex();
extern int yywrap();
%}

%token ID BUILTIN SC WHILE IF THEN COMMA NL ARRAY o lt eq1 eq cl op NUM DO IF ELSE
%%	

s:	WHILE op exp cl DO s1 NL{printf("Compound\n"); exit(1);}
	|IF op exp cl THEN s1 NL{printf("Compound\n"); exit(1);}
	|IF op exp cl THEN s1 ELSE s1 NL{printf("Compound\n"); exit(1);}
	|Bui;
exp:	exp1 lt exp1
	|exp1 eq1 exp1;
exp1:	NUM|ID;

s1:	ID eq f
	|s;
f:	f o ID
	|f o NUM
	|NUM
	|ID;

%%

int yyerror(char * str)
{
	printf("%s\n",str);
	exit(1);
}

main()
{
	yyparse();

}
