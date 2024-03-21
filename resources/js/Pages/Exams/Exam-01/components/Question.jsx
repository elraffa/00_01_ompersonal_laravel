import React from "react";
import Choice from "./Choice";

const Question = ({ question, handleChoice, choices }) => {
    const currentChoice = choices.find((c) => c.questionId === question.id)
      ?.choice
    return (
      <div className="mb-2">
        <p className="m-2 font-semibold flex flex-col sm:flex-row gap-3 sm:items-center">
          <span className="text-blue-50 bg-blue-400 px-4 py-1 rounded-md">
            Question {question.id}.
          </span>{' '}
          {question.question_text}
        </p>
        {question.choices.map((choice) => (
          <Choice
            key={choice.id}
            choice={choice}
            questionId={question.id}
            handleChoice={handleChoice}
            currentChoice={currentChoice}
          />
        ))}
        {question.audio_path && <audio src={question.audio_path} controls />}
      </div>
    )
  }

  export default Question