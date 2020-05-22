<div class='heading'> Post your thought </div>

<form action="includes/process_testi.inc.php" method="post">
            <table class='signup'>
                <tr>
                    <td> <input type="text" name='username' Placeholder='Enter your Name'></td>
                </tr>
                <tr>
                    <td> <input type="text" name='title' Placeholder='Subject'></td>
                </tr>
                <tr>
                    <td> <textarea name='msg' rows="5" cols="30" Placeholder='Enter your Message'> Enter The message here</textarea></td>
                </tr>
                <tr>
                    <td><button value='submit'>Submit</button></td><td></td>
                </tr>
            </table>
        </form>
        <?php
        include_once 'includes/testimonials.php'; 
        ?>