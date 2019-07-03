<!DOCTYPE html>
<html lang="en">

<head>
    <title>Curso - {nome} </title>
<style >
body{
    background-color: black
}

h1{
    color: blue
}

#paragrafo1 { color:chartreuse }
#paragrafo3 { color:darkgreen }
.paragrafo{ 
    font-family: 'Courier New', Courier, monospace;
    background-color: chocolate
}
</style>

</head>

<body>

    <?php echo "Helo world! " ?>

    <div>
        <h1 style="background-color: black; color: white">Meu nome é {nome}</h1>
    </div>
    <div>
        <p id="paragrafo1" class="paragrafo"> 
            <span>01 - Lorem ipsum</span>  dolor sit amet, consectetur adipiscing elit. Donec malesuada gravida rutrum. Nullam ornare congue massa eget interdum. Curabitur eget neque erat. Duis purus arcu, facilisis nec tortor tempor, aliquam elementum justo. Ut venenatis turpis eu dapibus ornare. Fusce et sem non enim sodales scelerisque eget eu sem. Fusce nec tempor diam, in semper nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum suscipit posuere nisi, nec bibendum libero luctus eget. Nam non metus quis elit iaculis facilisis. Quisque ut tortor porta risus finibus molestie a at arcu. Integer eget leo quam. In aliquam urna nec nunc ornare bibendum.<br>
               
        </p>

        <p id="paragrafo2" class="paragrafo"> 02 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada gravida rutrum. Nullam ornare congue massa eget interdum. Curabitur eget neque erat. Duis purus arcu, facilisis nec tortor tempor, aliquam elementum justo. Ut venenatis turpis eu dapibus ornare. Fusce et sem non enim sodales scelerisque eget eu sem. Fusce nec tempor diam, in semper nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum suscipit posuere nisi, nec bibendum libero luctus eget. Nam non metus quis elit iaculis facilisis. Quisque ut tortor porta risus finibus molestie a at arcu. Integer eget leo quam. In aliquam urna nec nunc ornare bibendum.</p>

        <p id="paragrafo3" class="paragrafo"> 03 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada gravida rutrum. Nullam ornare congue massa eget interdum. Curabitur eget neque erat. Duis purus arcu, facilisis nec tortor tempor, aliquam elementum justo. Ut venenatis turpis eu dapibus ornare. Fusce et sem non enim sodales scelerisque eget eu sem. Fusce nec tempor diam, in semper nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum suscipit posuere nisi, nec bibendum libero luctus eget. Nam non metus quis elit iaculis facilisis. Quisque ut tortor porta risus finibus molestie a at arcu. Integer eget leo quam. In aliquam urna nec nunc ornare bibendum.</p>
    </div>
</body>
</html>